<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatOnline extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'comment',
        'email',
        'lawyer_id',
        'status',
        'complete',
    ];

    public function lawyer() {
        return $this->belongsTo(Lawyer::class);
    }
}
