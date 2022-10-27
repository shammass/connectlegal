<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Lawyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'profile_pic',
        'law_firm_name',
        'law_firm_website',
        'emirates',
        'office_address',
        'contact_number',
        'landline_number',
        'position',
        'linkedin_profile',
        'language',
        'calendly_link',
        'moj_reg_no',
        'arbitration_area_id',
        'summary',
        'education',
        'honors_and_awards',
        'assosiation_and_membership',
        'disclaimer',
        'last_active_at',
        'is_verified',
        'email_verified_at',
        'password',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function arbitration() {
        return $this->belongsTo(ArbitrationArea::class, 'arbitration_area_id');
    }    

    public function getLawyerFee($id) {
        $lawService = LawyerService::whereServiceId($id)->first();
        return $lawService ? $lawService->lawyer_fee : null;
    }

    public function getPlatformFee($id) {
        $lawService = LawyerService::whereServiceId($id)->first();
        return $lawService ? $lawService->platform_fee : null;
    }

    public function isReadyWithSlot($userId) {
        $isSlotReady = Slot::whereLawyerId($userId)->first();
        return $isSlotReady ? true : false;
    }
}
