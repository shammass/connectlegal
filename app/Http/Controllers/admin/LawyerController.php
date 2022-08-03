<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function index() {
        $lawyers = Lawyer::all();
        return view('admin.lawyers.index', compact('lawyers'));
    }

    public function view($id) {

    }

    public function delete($id) {
        $delete = Lawyer::find($id);
        $delete->delete();
        return redirect()->route('admin.lawyer_list')->with('success','Lawyer deleted successfully!');
    }

    public function verify(Request $request, $lawyerId) {
        $verifyLawyer = Lawyer::whereUserId($lawyerId)->first();
        $verifyLawyer->is_verified = $request->status === "on" ? 1 : 0;
        $verifyLawyer->save();

        return "Success";
    }

    public function verifyLawyer($lawyerId) {
        $verifyLawyer = Lawyer::whereUserId($lawyerId)->first();
        $verifyLawyer->is_verified = 1;
        $verifyLawyer->save();

        return redirect()->route('admin.lawyer_list')->with('success','Lawyer verified successfully!');
    }
}
