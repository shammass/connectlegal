<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('lawyer.dashboard');
    }

    public function profile() {
        return view('lawyer.profile');
    }
}
