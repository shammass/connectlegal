<?php

namespace App\Http\Controllers;

use App\Models\LawyerService;
use App\Models\RequestQuote;
use App\Models\Services;
use Illuminate\Http\Request;

class HireLawyerController extends Controller
{
    public function hireALawyer() {
        $services = Services::whereApproved(1)->paginate(2);
        // return view('common.hire-lawyer.service', compact('services'));
        return view('common.pages.hire-lawyer.services', compact('services'));
    }

    public function serviceLawyers($id) {
        $serviceLawyers = LawyerService::whereServiceId($id)->get();
        return view('common.hire-lawyer.service-details', compact('serviceLawyers', 'id'));
    }

    public function lawyerServices($lawyerId) {
        $lawyerServices = LawyerService::whereHas('services', function ($query) {
            $query->where('approved', 1);
        })
        ->with('services')
        ->get();

        return view('common.hire-lawyer.lawyer-services', compact('lawyerServices'));
    }

    public function requestForQuotes(Request $request) {
        $lawyerServiceId = $request->id;
        $isExist = RequestQuote::where([
            'lawyer_service_id' => $lawyerServiceId,
            'requested_by' => auth()->user()->id,
        ])->first();
        if(!$isExist) {
            RequestQuote::create([
                'lawyer_service_id' => $lawyerServiceId,
                'requested_by' => auth()->user()->id,
            ]);
        }

        return true;
    }
}
