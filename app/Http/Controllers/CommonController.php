<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Forum;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function howItWorks() {
        $testimonials = Testimonial::whereApproved(1)->latest()->take(3)->get();
        return view('common.how-it-works', compact('testimonials'));
    }

    public function storeForum(Request $request) {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        Forum::create([
            'email' => $request->email,
            'message' => $request->message
        ]);

        return redirect()->route('home')->with('success','Your query has been sent successfully!');
    }

    public function storeContactUs(Request $request) {
        $request->validate([
            'contact_name'      => ['required', 'string', 'max:255'],
            'contact_email'     => ['required', 'string', 'email', 'max:255'],
            'contact_subject'   => ['required', 'string'],
            'contact_message'   => ['required', 'string'],
        ]);

        ContactUs::create([
            'name'      => $request->contact_name,
            'email'     => $request->contact_email,
            'contact'   => $request->contact,
            'subject'   => $request->contact_subject,
            'message'   => $request->contact_message
        ]);

        return redirect()->route('howItWorks')->with('success','Your query has been sent successfully!');
    }

    public function storeTestimonials(Request $request) {
        $request->validate([
            'name' =>    ['required', 'string', 'max:255'],
            'emirate' => ['required', 'string'],
            'message' => ['required', 'string'],
        ]);

        Testimonial::create([
            'name' => $request->name,
            'emirate' => $request->emirate,
            'message' => $request->message
        ]);

        return redirect()->route('howItWorks')->with('success','Your query has been sent successfully!');
    }

    public function questionAnswer() {
        $forums = Forum::whereIsVerified(1)->paginate(4);
        return view('common.question-answer', compact('forums'));
    }

    public function testimonials() {
        $testimonials = Testimonial::whereApproved(1)
            ->orderBy('updated_at', 'DESC')
            ->get();

        return view('common.testimonials', compact('testimonials'));
    }
}
