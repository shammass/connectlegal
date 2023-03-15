<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawyerConsultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'message',
        'user_id',
        'lawyer_id',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function lawyer() {
        return $this->belongsTo(User::class, 'lawyer_id');
    }
}
