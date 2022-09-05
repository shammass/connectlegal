<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawyerService extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'lawyer_id',
        'amount',
        'platform_percentage',
    ];
}
