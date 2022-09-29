<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'to_user',
        'from_user',
        'is_group',
        'group_id',
        'seen',
        'msg',
    ];

    public function toUser() {
        return $this->belongsTo(User::class, 'to_user');
    }

    public function fromUser() {
        return $this->belongsTo(User::class, 'from_user');
    }

    public function group() {
        return $this->belongsTo(Group::class, 'group_id');
    }
}
