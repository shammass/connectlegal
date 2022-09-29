<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    $hiredData = Payment::take(5)->get();
    return view('admin.dashboard', compact('hiredData'));
  }

  public function test()
  {
    return view('content.dashboard.dashboards-analytics');
  }
}
