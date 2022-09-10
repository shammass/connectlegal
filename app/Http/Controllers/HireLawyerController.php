<?php

namespace App\Http\Controllers;

use App\Models\LawyerService;
use App\Models\Services;
use Illuminate\Http\Request;

class HireLawyerController extends Controller
{
    public function hireALawyer() {
        $services = Services::whereApproved(1)->get();
        return view('common.hire-lawyer.service', compact('services'));
    }

    public function serviceLawyers($id) {
        $serviceLawyers = LawyerService::whereServiceId($id)->get();
        return view('common.hire-lawyer.service-details', compact('serviceLawyers', 'id'));
    }
}
