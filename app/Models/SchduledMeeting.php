<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchduledMeeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'days_slot_id',
        'scheduled_by',
        'lawyer_id',
        'payment_id',
    ];

    public function daysSlot() {
        return $this->belongsTo(DaysSlot::class, 'days_slot_id');
    }

    public function scheduledBy() {
        return $this->belongsTo(User::class, 'scheduled_by');
    }

    public function lawyer() {
        return $this->belongsTo(User::class, 'lawyer_id');
    }
}
