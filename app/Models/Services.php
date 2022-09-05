<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'arbitration_area_id',
        'title',
        'description',
    ];

    public function arbitration() {
        return $this->belongsTo(ArbitrationArea::class, 'arbitration_area_id');
    }    
}
