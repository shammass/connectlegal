<?php

namespace App\Http\Controllers;

use App\Models\BlogsArticles;
use App\Models\Callback;
use App\Models\ChatOnline;
use App\Models\ContactUs;
use App\Models\DaysSlot;
use App\Models\Forum;
use App\Models\ForumAnswers;
use App\Models\LawArticle;
use App\Models\LawCategory;
use App\Models\Lawyer;
use App\Models\Rate;
use App\Models\Slot;
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
        return view('common.question-answer.list', compact('forums'));
    }

    public function testimonials() {
        $testimonials = Testimonial::whereApproved(1)
            ->orderBy('updated_at', 'DESC')
            ->get();

        return view('common.testimonials', compact('testimonials'));
    }

    public function  bookAMeeting($id) {
        $lawyer = Lawyer::whereId($id)->first();
        $slot = Slot::whereLawyerId($lawyer->user_id)->first();
        $unavailableDays = [];
        if($slot) {
            if(!$slot->monday_slot)
                $unavailableDays[] = 1;
            if(!$slot->tuesday_slot)
                $unavailableDays[] = 2;
            if(!$slot->wednesday_slot)
                $unavailableDays[] = 3;
            if(!$slot->thursday_slot)
                $unavailableDays[] = 4;
            if(!$slot->friday_slot)
                $unavailableDays[] = 5;
            if(!$slot->saturday_slot)
                $unavailableDays[] = 6;
            if(!$slot->sunday_slot)
                $unavailableDays[] = 0;
        }

        $daySlots = DaysSlot::whereSlotId($slot->id)->get();
        return view('common.book-meeting',  compact('lawyer', 'daySlots', 'slot', 'unavailableDays'));
    }

    public function notAvailableDays($day) {
        switch($day) {
            case("monday_slot"):
               return 1;
                break;            
            case("tuesday_slot"):
               return 2;
                break;            
            case("wednesday_slot"):
               return 3;
                break;            
            case("thursday_slot"):
               return 4;
                break;            
            case("friday_slot"):
               return 5;
                break;            
            case("saturday_slot"):
               return 6;
                break;            
            case("sunday_slot"):
               return 0;
                break;            
            default:
                $msg = 'Something went wrong.';
        }
    }

    function chatOnline(Request $request) {
        $isAlreadyRequested = ChatOnline::where([
            'user_id'   => auth()->user()->id,
            'lawyer_id' => $request->lawyerId,
            'status'    => 1
        ])->first();
        if($isAlreadyRequested) {
            return redirect()->route('home')->with('warning','Oops! You can send free online chat request only once to same lawyer');
        }else {
            $request->validate([
                'message'          =>  ['required'],
            ]);
    
            $chatOnlineRqst = ChatOnline::create([
                'user_id' => auth()->user()->id,
                'comment' => $request->message,
                'lawyer_id' => $request->lawyerId,
                'any' => $request->lawyerId ? false : true,
            ]);
    
            $mail_data = [
                'subject' => "Chat online request",
                'htmlPart' => $request->message,
                'lawyer' => $chatOnlineRqst->lawyer_id ? $chatOnlineRqst->lawyer->user->email : null,
            ];
    
            $job = (new \App\Jobs\OnlineChatRqstEmail($mail_data))
                    ->delay(now()->addSeconds(2)); 
    
            dispatch($job);
    
            return redirect()->route('home')->with('success','Your query has been sent successfully!');
        }
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
        foreach($response as $k => $v) {
            $writtenBy = "Written by";
            BlogsArticles::create([
                'image'         => $v->yoast_head_json->og_image[0]->url,
                'title'         => $v->title->rendered,
                'description'   => $v->excerpt->rendered,
                'written_by'    => $v->yoast_head_json->twitter_misc->$writtenBy,
                'full_descr'    => $this->blogDetails($v->id)
            ]);
        }
        return view('common.blogs.index', compact('response', 'pagesNo', 'page'));
    } 
    
    public function index2() {
        $blogs = BlogsArticles::orderBy('created_at', 'DESC')->paginate(10);
        return view('common.blogs.index2', compact('blogs'));
    }

    public function blogDetails2($id) {
        $blog = BlogsArticles::whereId($id)->first();
        return view('common.blogs.details2', compact('blog'));

    }

    public function blogDetails($id) {
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

        return $blog->content->rendered;
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

    public function viewQA($slug) {
        $forum = Forum::whereSlug($slug)->first();
        if(!$forum) {
            return view('404');
        }
        $forumAnswers = ForumAnswers::whereForumId($forum->id)->get();
        return view('common.question-answer.view', compact('forum', 'forumAnswers'));
    }

    public function rate(Request $request, $answerId) {
        $answer = ForumAnswers::whereId($answerId)->first();
        Rate::create([
            'answer_id'     => $answerId,
            'rated_by'      => auth()->user()->id,
            'rate'          => $request->rating,
            'comment'       => $request->comment,
        ]);

        return redirect()->route('question-answer.view', $answer->forum->slug)->with('success', 'Your have rated successfully');
    }

    public function callback(Request $request) {
        $request->validate([
            'name'          =>  ['required', 'string', 'max:255'],
            'contact'       =>  ['required'],
            'message'       =>  ['required'],
        ]);

        Callback::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'message'       => $request->message,
            'contact_no'    => $request->contact,
            'to_lawyer'     => $request->lawyer_id ?? null
        ]);

        return redirect()->route('home')->with('success', 'Your query has been sent successfully');
    }

    public function articleList() {
        $articleList = LawArticle::orderBy('updated_at', 'DESC')
        ->paginate(5);
        $categories = LawCategory::pluck('category', 'id');
        return view('common.law-article.index', compact('articleList', 'categories'));
    }

    public function articleDetails($id) {
        $article = LawArticle::whereId($id)->first();
        return view('common.law-article.detail', compact('article'));
    }

    public function filterByCategory() {
        $categoryId = $_GET['category'];
        $articles = LawArticle::whereCategoryId($categoryId)
        ->orderBy('updated_at', 'DESC')
        ->paginate(5);
        return (string) view('common.law-article.category-filter',  compact('articles')); 
    }

    public function ourLawyers() {
        $lawyers = Lawyer::whereIsVerified(1)->paginate(2);
        return view('common.our-lawyers.index', compact('lawyers'));
    }
}
