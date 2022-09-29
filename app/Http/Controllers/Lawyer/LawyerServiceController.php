<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\ArbitrationArea;
use App\Models\Lawyer;
use App\Models\LawyerService;
use App\Models\Services;
use Illuminate\Http\Request;

class LawyerServiceController extends Controller
{
    public function index() {
        $services = LawyerService::whereLawyerId(auth()->user()->id)->get();
        $arbitrationArea = Lawyer::whereUserId(auth()->user()->id)->first();
        if(!$arbitrationArea->arbitration_area_id) {
            return redirect()->route('lawyer.profile')->with('error', 'Please add your arbitration area');
        }else {
            return view('lawyer.services.index', compact('services', 'arbitrationArea'));
        }
    }

    public function create() {
        return view('lawyer.services.create');
    }

    public function store(Request $request) {
        $this->validate(request(), [
            'title'         => 'required:unique:services',           
            'description'   => 'required',           
        ]);

        $service = Services::create([
            'arbitration_area_id'   => $request->area,
            'title'                 => $request->title,
            'description'           => $request->description,
            'added_by'              => auth()->user()->id
        ]);

        LawyerService::create([
            'service_id' => $service->id,
            'lawyer_id'  => auth()->user()->id
        ]);

        return redirect()->route('lawyer.services')->with('success','Service added successfully');
    }

    public function update(Request $request, $id) { 
        $this->validate(request(), [
            'title'         => 'required:unique:services,title,'.$id,           
            'description'   => 'required',           
        ]);

        Services::updateOrCreate(['id' => $id],
        [
            'title'                 => $request->title,
            'description'           => $request->description,   
        ]
        );

        return redirect()->route('lawyer.services')->with('success','Service updated successfully');
    }

    public function delete($id) {
        Services::findOrFail($id)->delete();

        return redirect()->route('lawyer.services')->with('success','Service deleted successfully');
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
