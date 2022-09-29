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
use Illuminate\Http\Request;
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
        $msg = $request->msg;
        $message = GroupMessages::create([
            'from_id'   => auth()->user()->id,
            'body'      => $msg,
            'group_id'  => $groupId
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
        $latestMsg = (string) view('lawyer.community.groups.latest-chat',  compact('message'));        
        return $latestMsg;
    }

    public function aboutGroup($groupId) {
        $group = Group::whereId($groupId)->first();
        return view('lawyer.community.groups.about', compact('group', 'groupId'));
    }
}
