<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'group_name',
        'about',
        'active',
    ];

    public function admin() {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function totalMembers($id) {
        return GroupMember::whereGroupId($id)->count();
    }

    public function getProfilePic($id) {
        $lawyer =  Lawyer::whereUserId($id)->first();
        return $lawyer->profile_pic;
    }

    public function unseenMsg($groupId) {
        $unseenMsg = ChatNotification::where([
            'to_user' => auth()->user()->id,
            'group_id' => $groupId,
            'seen'  => 0
        ])->count();

        return $unseenMsg;
    }
}
