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
        'approved', //by default "No"
    ];

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

    public function getLowestFee($id) {
        $minFee = LawyerService::whereServiceId($id)->min('lawyer_fee');
        $platformFee = LawyerService::whereServiceId($id)->value('platform_fee');
        return $minFee + $platformFee ?? null;
    }
}
