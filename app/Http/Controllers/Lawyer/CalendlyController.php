<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use App\Models\ScheduleMeeting;
use Illuminate\Http\Request;

class CalendlyController extends Controller
{
    public function scheduledEvents() {
        $scheduledEvents = null;
        $currentUser = null;
        $curl = curl_init(); 
        curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.calendly.com/users/me",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer eyJraWQiOiIxY2UxZTEzNjE3ZGNmNzY2YjNjZWJjY2Y4ZGM1YmFmYThhNjVlNjg0MDIzZjdjMzJiZTgzNDliMjM4MDEzNWI0IiwidHlwIjoiUEFUIiwiYWxnIjoiRVMyNTYifQ.eyJpc3MiOiJodHRwczovL2F1dGguY2FsZW5kbHkuY29tIiwiaWF0IjoxNjU5ODgxODc0LCJqdGkiOiJmNzhiMDRkNy1mZjg5LTQ4NWMtYmZjZC0xYTlhN2VjNTQ3ZDAiLCJ1c2VyX3V1aWQiOiIwZGJiN2EyMC01MGUwLTRkNTktOTQ4NS0wOGQ5NGFkYTE0ZTQifQ.9uIsvSLX2ffOBSKInfc-R_K4NTPUcXe-UdEj37DptpNNtMaaQCRQZsCVJRrQXpftWZaSnmYwtJCJgINnyAJarg",
            "Content-Type: application/json"
        ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $currentUser = json_decode($response);
            foreach($currentUser as $k => $user) {      
                // print_r($user);exit;      
               $userUrl = $user->uri;
            }
        }

        if($currentUser) {
            $curl = curl_init();

            curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.calendly.com/scheduled_events?user=".$userUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer eyJraWQiOiIxY2UxZTEzNjE3ZGNmNzY2YjNjZWJjY2Y4ZGM1YmFmYThhNjVlNjg0MDIzZjdjMzJiZTgzNDliMjM4MDEzNWI0IiwidHlwIjoiUEFUIiwiYWxnIjoiRVMyNTYifQ.eyJpc3MiOiJodHRwczovL2F1dGguY2FsZW5kbHkuY29tIiwiaWF0IjoxNjU5ODgxODc0LCJqdGkiOiJmNzhiMDRkNy1mZjg5LTQ4NWMtYmZjZC0xYTlhN2VjNTQ3ZDAiLCJ1c2VyX3V1aWQiOiIwZGJiN2EyMC01MGUwLTRkNTktOTQ4NS0wOGQ5NGFkYTE0ZTQifQ.9uIsvSLX2ffOBSKInfc-R_K4NTPUcXe-UdEj37DptpNNtMaaQCRQZsCVJRrQXpftWZaSnmYwtJCJgINnyAJarg",
                "Content-Type: application/json"
            ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $scheduledEvents = json_decode($response);
            }
        }
        // print_r($scheduledEvents->collection);exit;
        $scheduleMeeting = new ScheduleMeeting();
        return view('lawyer.calendly.scheduled-events', compact('scheduledEvents', 'scheduleMeeting'));
    }
}
