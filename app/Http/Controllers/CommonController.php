<?php

namespace App\Http\Controllers;

use App\Models\ChatOnline;
use App\Models\ContactUs;
use App\Models\Forum;
use App\Models\Lawyer;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function bookAMeeting($id) {
        $lawyer = Lawyer::whereId($id)->first();
        return view('common.book-meeting',  compact('lawyer'));
    }

    function chatOnline(Request $request) {
        ChatOnline::create([
            'user_id' => auth()->user()->id,
            'comment' => $request->comment,
            'lawyer_id' => $request->lawyerId,
        ]);

        return redirect()->route('home')->with('success','Your query has been sent successfully!');
    }

    public function userRegister(Request $request) {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => 3,            
        ]);

        return redirect()->route('home')->with('success','You have registered successfully. Please login!!');
    }

    public function onlineChatRequests() {
        $chatRequests = ChatOnline::whereUserId(auth()->user()->id)->get();
        return view('common.chat-requests', compact('chatRequests'));
    }
}
