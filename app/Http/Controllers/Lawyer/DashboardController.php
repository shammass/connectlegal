<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\ArbitrationArea;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index() {
        return view('lawyer.dashboard');
    }

    public function profile() {
        $lawyer = Lawyer::whereUserId(auth()->user()->id)->first();
        $arbitrationArea = ArbitrationArea::pluck('area', 'id');
        return view('lawyer.profile', compact('lawyer', 'arbitrationArea'));
    }

    public function updateProfile(Request $request, $id) {
        $lawyer = Lawyer::updateOrCreate(
            ['id' => $id],
            [
                'law_firm_name' => $request->lawfirm_name,
                'law_firm_website' => $request->lawfirm_website,
                'emirates' => $request->emirates,
                'office_address' => $request->office_address,            
                'contact_number' => $request->contact_number,
                'landline_number' => $request->landline_number,
                'position' => $request->position,
                'linkedin_profile' => $request->linkedin_profile,
                'calendly_link' => $request->calendly_link,
                'language' => $request->language,
                'arbitration_area_id' => $request->area,
                'summary' => $request->summary,
                'education' => $request->education,
                'assosiation_and_membership' => $request->assosiation_and_membership,
                'honors_and_awards' => $request->honors_and_awards,
                'disclaimer' => $request->disclaimer,
            ]
        );
        $this->profilePic($lawyer, $request);
        return redirect()->route('lawyer.profile')->with('success','Your profile updated successfully!');
    }


    public function profilePic($lawyer, $request) {
        $imageDir = 'lawyer/profile_pic/' . $lawyer->id;

        $image = $request->file('profile_pic');
        if ($request->hasFile('profile_pic')) {
            $lawyer->profile_pic = $image->store($imageDir);
            $lawyer->save();
        }
        return true;
    }

}
