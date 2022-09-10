<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\LawyerService;
use Illuminate\Http\Request;

class LawyerServiceController extends Controller
{
    public function index() {
        $services = LawyerService::whereLawyerId(auth()->user()->id)
        ->whereHas('services', function ($query) {
            $query->where('approved', 1);
        })
        ->with('services')
        ->get();
        return view('lawyer.services.index', compact('services'));
    }

    public function addFee(Request $request, $id) {
        $this->validate(request(), [
            'fee' => 'required',       
        ]);
        LawyerService::updateOrCreate(['id' => $id],
            [
            'lawyer_fee'  => $request->fee,
            ]
        ); 

        return redirect()->route('lawyer.services', $request->service_id)->with('success','Added fee successfully');
    }
}
