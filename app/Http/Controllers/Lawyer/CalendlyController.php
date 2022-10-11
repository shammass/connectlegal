<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use App\Models\ScheduleMeeting;
use Illuminate\Http\Request;

class CalendlyController extends Controller
{
    public function scheduledEvents() {
        
        return view('lawyer.calendly.scheduled-events');
    }

    public function slots() {
        return view('lawyer.calendly.slots');
    }

    public function addSlots() {
        return view('lawyer.calendly.add-slot');
    }

    public function storeSlots(Request $request) {
        print_r($request->all());exit;
    }

    
}
