<?php

namespace App\Http\Controllers\Lawyer;

use App\Events\PostComment;
use App\Http\Controllers\Controller;
use App\Models\ChatNotification;
use App\Models\Group;
use App\Models\GroupMember;
use App\Models\GroupMessages;
use App\Models\Lawyer;
use App\Models\Post;
use Chatify\Facades\ChatifyMessenger as Chatify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Str;

class GroupController extends Controller
{
    public function groups() {
        $user = auth()->user();
        $groupsByMe = Group::whereAdminId($user->id)
        ->orderBy('created_at', 'DESC')
        ->get();

        $groupsIamIn = GroupMember::whereMemberId($user->id)
        ->orderBy('created_at', 'DESC')
        ->get();

        $lawyers = Lawyer::where([
            ['user_id', '!=', $user->id],
            ['is_verified', 1]
        ])->get();

        return view('lawyer.community.groups.index', compact('groupsByMe', 'groupsIamIn', 'lawyers'));
    }

    public function store(Request $request) {
        $group = Group::create([
            'admin_id'      => auth()->user()->id,
            'group_name'    => $request->group,
            'about'         => $request->about,
        ]);

        foreach($request->lawyers as $k => $lawyer) {
            GroupMember::create([
                'group_id'  => $group->id,
                'member_id' => $lawyer
            ]);
        }

        return redirect()->route('lawyer.community.group.feed', $group->id)->with('success', 'Created group successfully');
    }

    public function groupFeed($groupId) {
        // check user part of this group
        $user = auth()->user();
        $isPartOfGroup = GroupMember::where([
            'member_id' => $user->id,
            'group_id' => $groupId,
        ])->first();
        $isAdmin = Group::whereAdminId($user->id)->first();

        if($isPartOfGroup || $isAdmin) {
            $posts = Post::whereGroupId($groupId)
            ->orderBy('created_at', 'DESC')
            ->get();
            $group = Group::whereId($groupId)->first();
            $groupName = $group->group_name;
            return view('lawyer.community.groups.feed', compact('posts', 'groupId', 'groupName'));
        }else {
            return view('lawyer.layouts.group-error');
        }
    }

    public function storeGroupPost(Request $request, $groupId) {
        $this->validate(request(), [
            'title'   => 'required|unique:posts',   
        ]);

        $post = Post::create([
            'user_id'       => auth()->user()->id,
            'title'         => $request->title,
            'description'   => $request->description,
            'group_id'      => $groupId,
            'slug'          => Str::slug($request->title)
        ]);
        event(new PostComment($post->slug, 'groupPost'));
        return redirect()->route('lawyer.community.group.feed', $groupId)->with('success','Your post has been successfully added!');
    }

    public function groupChat($groupId) {
        $groupMembers = GroupMember::whereGroupId($groupId)->get();
        $group = Group::whereId($groupId)->first();
        $messages = GroupMessages::whereGroupId($groupId)->get();
        return view('lawyer.community.groups.chat', compact('groupMembers', 'groupId', 'group', 'messages'));
    }

    public function sendGroupMessage(Request $request, $groupId) {
        Log::info("Heyyeye");
        Log::info($request->all());
        $msg = $request->msg ?? 'file';
        $error = (object)[
            'status' => 0,
            'message' => null
        ];
        $attachment = null;
        $attachment_title = null;
        if ($request->hasFile('file')) {
            // allowed extensions
            $allowed_images = Chatify::getAllowedImages();
            $allowed_files  = Chatify::getAllowedFiles();
            $allowed        = array_merge($allowed_images, $allowed_files);

            $file = $request->file('file');
            // check file size
            if ($file->getSize() < Chatify::getMaxUploadSize()) {
                if (in_array(strtolower($file->getClientOriginalExtension()), $allowed)) {
                    // get attachment name
                    $attachment_title = $file->getClientOriginalName();
                    // upload attachment and store the new name
                    $attachment = Str::uuid() . "." . $file->getClientOriginalExtension();
                    $file->storeAs(config('chatify.attachments.folder'), $attachment, config('chatify.storage_disk_name'));
                } else {
                    $error->status = 1;
                    $error->message = "File extension not allowed!";
                }
            } else {
                $error->status = 1;
                $error->message = "File size you are trying to upload is too large!";
            }
        }
        $message = GroupMessages::create([
            'from_id'       => auth()->user()->id,
            'body'          => $msg,
            'group_id'      => $groupId,
            'attachment'    => ($attachment) ? json_encode((object)[
                'new_name' => $attachment,
                'old_name' => htmlentities(trim($attachment_title), ENT_QUOTES, 'UTF-8'),
            ]) : null,
        ]);
        event(new PostComment($message->id, 'groupMessage'));     

        $groupMembers = GroupMember::whereGroupId($groupId)->get();
        $adminId = null;
        foreach($groupMembers as $k => $member) {
            $adminId = $member->group->admin_id;
            if($member->member_id != auth()->user()->id) {
                ChatNotification::create([
                    'is_group'      => true,
                    'group_id'      => $groupId,
                    'to_user'       => $member->member_id,
                    'from_user'     => auth()->user()->id,
                    'msg'           => $msg
                ]);
            }
        }
        // To Admin
        if($adminId != auth()->user()->id) {
            ChatNotification::create([
                'is_group'      => true,
                'group_id'      => $groupId,
                'to_user'       => $adminId,
                'from_user'     => auth()->user()->id,
                'msg'           => $msg
            ]);
        }

        return true;
    }

    public function getLatestGroupMsg(Request $request) {
        $msgId = $request->data;
        $message = GroupMessages::whereId($msgId['postComment'])->first();
        $attachment = null;
        if($message->attachment) {
            $attachment = json_decode($message->attachment);                                                           
        }
        $latestMsg = (string) view('lawyer.community.groups.latest-chat',  compact('message', 'attachment'));        
        return $latestMsg;
    }

    public function aboutGroup($groupId) {
        $group = Group::whereId($groupId)->first();
        return view('lawyer.community.groups.about', compact('group', 'groupId'));
    }
}
