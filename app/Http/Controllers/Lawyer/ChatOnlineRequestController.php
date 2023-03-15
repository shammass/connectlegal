<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\ChatOnline;
use App\Models\ChMessage;
use App\Models\Lawyer;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class ChatOnlineRequestController extends Controller
{
    public function requests() {
        $lawyer = Lawyer::whereUserId(auth()->user()->id)->first();
        $onlineRequests = ChatOnline::whereLawyerId($lawyer->id)->get();
        $ids = [];
        foreach($onlineRequests as $k => $request) {
            $ids[] = $request->id;
        }
        $chatRequestsForAllLawyers = ChatOnline::where([
            'any'    => 1,
            'status' => 0
        ])->get();
       
        foreach($chatRequestsForAllLawyers as $k => $request) {
            $ids[] = $request->id;
        }
        
        $chatRequests = ChatOnline::whereIn('id', $ids)->paginate(10);
        // return view('lawyer.chat-online', compact('onlineRequests'));
        return view('lawyer.pages.chat-online-requests', compact('chatRequests'));
    }

    public function acceptRequest(Request $request, $id) {
        $lawyer = Lawyer::whereUserId(auth()->user()->id)->first();
        $isAcceptedAlready = ChatOnline::whereId($id)->first();
        if($isAcceptedAlready->status != 1) {
            $chatRequest = ChatOnline::updateOrCreate(['id' => $id],
            [
                'status'    => 1,
                'lawyer_id' => $lawyer->id
            ]);
            $messageID = mt_rand(9, 999999999) + time();
            
            ChMessage::create([
                'id' => $messageID,
                'type' => 'user',
                'from_id' => $isAcceptedAlready->user_id,
                'to_id' => Auth::user()->id,
                'body' =>  $isAcceptedAlready->comment
            ]);

            $html = View::make('emails.chat-rqst-accepted', ['name' => $chatRequest->user->name, 
                                                            'lawyerName' => auth()->user()->name, 
                                                            'id' => auth()->user()->id
                                                            ])->render();
            $mail_data = [
                'subject' => auth()->user()->name." has accepted your chat request!",
                'htmlPart' => $html,
                'user_email' => $chatRequest->user->email
                // 'user_email' => "s4shamma@gmail.com"
            ];
    
            $job = (new \App\Jobs\SendOnlineChatRequestEmail($mail_data))
                    ->delay(now()->addSeconds(2)); 
    
            dispatch($job);
            return "success";
        }

        return "error";

    }

    public function completeRequest(Request $request, $id) {
        $chat = ChatOnline::updateOrCreate(['id' => $id],
        [
            'complete' => 1
        ]);

        $users = ["user", "lawyer"];

        foreach($users as $k => $user) {
            if($user == "lawyer") {
                $html = View::make('emails.chat-rqst-completed', ['name' => $chat->user->name, 
                                                                    'lawyerName' => auth()->user()->name, 
                                                                    'id' => auth()->user()->id
                                                                    ])->render();
                $mail_data = [
                    'subject' => "Chat Request Completed with ".$chat->user->name." on Connect Legal",
                    'htmlPart' => $html,
                    'user_email' => auth()->user()->email
                    // 'user_email' => "s4shamma@gmail.com"
                ];
        
            }else {
                $html = View::make('emails.chat-rqst-completed-to-user', ['name' => $chat->user->name, 
                                                                    'lawyerName' => auth()->user()->name, 
                                                                    'id' => auth()->user()->id
                                                                    ])->render();
                $mail_data = [
                    'subject' => "Chat Request Completed with ".auth()->user()->name." on Connect Legal",
                    'htmlPart' => $html,
                    'user_email' => $chat->user->email
                    // 'user_email' => "s4shamma@gmail.com"
                ];
            }
            $job = (new \App\Jobs\ChatRequestCompleted($mail_data))
                    ->delay(now()->addSeconds(2)); 
    
            dispatch($job);
        }


        return "success";
    }
}
