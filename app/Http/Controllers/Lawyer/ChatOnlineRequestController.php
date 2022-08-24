<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\ChatOnline;
use App\Models\Lawyer;
use Illuminate\Http\Request;

class ChatOnlineRequestController extends Controller
{
    public function requests() {
        $lawyer = Lawyer::whereUserId(auth()->user()->id)->first();
        $onlineRequests = ChatOnline::whereLawyerId($lawyer->id)->get();
        
        return view('lawyer.chat-online', compact('onlineRequests'));
    }

    public function acceptRequest(Request $request, $id) {
        ChatOnline::updateOrCreate(['id' => $id],
        [
            'status' => 1
        ]);

        return "success";
    }
}
