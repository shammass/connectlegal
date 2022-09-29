<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Forum extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'message',
        'slug',
        'is_verified',
        'title',
        'to_lawyer'
    ];

    public function toLawyer() {
        return $this->belongsTo(User::class, 'to_lawyer');
    }

    public function myAnswer($forumId) {
        $answer = ForumAnswers::where([
            'forum_id'      => $forumId,
            'lawyer_id'     => auth()->user()->id
        ])->first();
        return $answer ? $answer->answer : null;
    }

    public function isAnswered($forumId) {
        $answer = ForumAnswers::whereForumId($forumId)->first();
        return $answer ? true : false;
    }
}
