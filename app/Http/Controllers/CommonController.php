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

use function PHPSTORM_META\map;

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

    public function blogsArticles($page) {
        $url = "https://connectlegal.ae/wp-json/wp/v2/posts?page=".$page;
        $ch = curl_init();
        $headers = [];
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // this function is called by curl for each header received
        curl_setopt($ch, CURLOPT_HEADERFUNCTION,
        function($curl, $header) use (&$headers) {
            $len = strlen($header);
            $header = explode(':', $header, 2);
            if (count($header) < 2) // ignore invalid headers
            return $len;

            $headers[strtolower(trim($header[0]))][] = trim($header[1]);
            
            return $len;
        });

        $data = curl_exec($ch);
        $response = json_decode($data);
        $totalPages = $headers['x-wp-totalpages'];
        $pagesNo = range(1,$totalPages[0]);
        return view('common.blogs.index', compact('response', 'pagesNo', 'page'));
    }

    public function blogsArticles1() {
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://connectlegal.ae/wp-json/wp/v2/posts",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Accept: application/json',
                "Content-Type: application/json",
                "Access-Control-Allow-Origin: *",
                "Access-Control-Allow-Methods: GET, POST, OPTIONS",
                "Access-Control-Allow-Headers: X-Requested-With"
            ],
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);
        print_r($response);exit;
        curl_close($curl);   
        return view('common.blogs.index', compact('response'));
    }

    public function blogsArticleDetails($id) {
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://connectlegal.ae/wp-json/wp/v2/posts/".$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Accept: application/json',
                "Content-Type: application/json",
                "Access-Control-Allow-Origin: *",
                "Access-Control-Allow-Methods: GET, POST, OPTIONS",
                "Access-Control-Allow-Headers: X-Requested-With, X-WP-Total, X-WP-TotalPages"
            ],
        ));

        $response = curl_exec($curl);
        $blog = json_decode($response);
        // print_r($response);exit;
        curl_close($curl);   
        return view('common.blogs.details', compact('blog'));
    }


}
