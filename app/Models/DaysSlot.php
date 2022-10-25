<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaysSlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'slot_id',
        'day',
        'slot_start_time',
        'slot_end_time',
        'amount',
    ];

    public function slot() {
        return $this->belongsTo(Slot::class, 'slot_id');
    }

    public function isAvailable($id, $day) {
        $day = strtolower($day).'_slot';
        $available = Slot::where([
            'id' => $id,
            $day => 1
        ])->first();
        
        return $available ? true : false;
    }
}
