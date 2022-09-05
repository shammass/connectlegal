<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ArbitrationArea;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
        $services = Services::all();
        $arbitration = ArbitrationArea::pluck('area', 'id');
        return view('admin.services.index', compact('services', 'arbitration'));
    }

    public function store(Request $request) {
        $this->validate(request(), [
            'title'         => 'required',           
            'description'   => 'required',           
        ]);

        Services::create([
            'arbitration_area_id'   => $request->area,
            'title'                 => $request->title,
            'description'           => $request->description,
        ]);

        return redirect()->route('admin.services')->with('success','Service added successfully');
    }

    public function update(Request $request, $id) {
        $this->validate(request(), [
            'title'         => 'required',           
            'description'   => 'required',           
        ]);

        Services::updateOrCreate(['id' => $id],
        [
            'arbitration_area_id'   => $request->area,
            'title'                 => $request->title,
            'description'           => $request->description,   
        ]
        );

        return redirect()->route('admin.services')->with('success','Service updated successfully');
    }

    public function delete($id) {
        Services::findOrFail($id)->delete();

        return redirect()->route('admin.services')->with('success','Service deleted successfully');
    }
}
