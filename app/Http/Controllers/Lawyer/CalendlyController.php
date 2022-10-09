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
}
