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
        'zoom_id',
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

    public function zoom() {
        return $this->belongsTo(Zoom::class, 'zoom_id');
    }

    public function getSessionAmount($session, $lawyerId) {
        $column = $session == 15 ? "fifteen" : "thirty";
        $fees = SlotFees::whereLawyerId($lawyerId)->first();
        return $fees ? $fees->$column : 0;
    }
}
