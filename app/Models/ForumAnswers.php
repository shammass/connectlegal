<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumAnswers extends Model
{
    use HasFactory;

    protected $fillable = [
        'lawyer_id',
        'forum_id',
        'answer',
    ];

    public function lawyer() {
        return $this->belongsTo(User::class);
    }

    public function forum() {
        return $this->belongsTo(Forum::class);
    }
    
}
