<?php

namespace App\Http\Controllers;

use App\Models\DaysSlot;
use App\Models\SchduledMeeting;
use App\Models\User;
use App\Models\ZoomMeeting;
use App\Traits\ZoomMeetingTrait;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Stripe\Exception\CardException;
use Stripe\StripeClient;

class MeetingController extends Controller
{
    use ZoomMeetingTrait;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;

    // private $stripe;
    // public function __construct() {
    //     $this->stripe = new StripeClient(env('STRIPE_SECRET'));
    // }

    public function show($id)
    {
        $meeting = $this->get($id);

        return view('meetings.index', compact('meeting'));
    }

    public function store()
    {
        $data = [];
        $data['topic']      = "Testing Topic";
        $data['start_time'] = "2022-10-03";
        $data['duration'] = 15;
        $data['agenda'] = "Testing Agenda";
        $data['host_video'] = 1;
        $data['participant_video'] = 1;
        $this->create($data);
        // $this->create($request->all());

        // return redirect()->route('meetings.index');
        return redirect()->route('home');
    }

    public function update($meeting, Request $request)
    {
        $this->update($meeting->zoom_meeting_id, $request->all());

        return redirect()->route('meetings.index');
    }

    public function destroy(ZoomMeeting $meeting)
    {
        $this->delete($meeting->id);

        return $this->sendSuccess('Meeting deleted successfully.');
    }

    public function scheduleMeeting(Request $request) {
        $validator = Validator::make($request->all(), [
            'fullName'      => 'required',
            'cardNumber'    => 'required',
            'month'         => 'required',
            'year'          => 'required',
            'cvv'           => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('book-a-meeting', $request->lawyerId)->with('danger', $validator->errors()->first());
        }

        $token = $this->createToken($request);
        if (!empty($token['error'])) {
            return redirect()->route('book-a-meeting', $request->lawyerId)->with('danger', $token['error']);
        }
        if (empty($token['id'])) {
            return redirect()->route('book-a-meeting', $request->lawyerId)->with('danger', 'Payment Failed');
        }

        $charge = $this->createCharge($token['id'], (int) str_replace("$", "", $request->amount));
        
        if (!empty($charge) && $charge['status'] == 'succeeded') {
            $payment = SchduledMeeting::create([
                'days_slot_id'      => $request->daySlotId,
                'scheduled_by'      => auth()->user()->id,
                'lawyer_id'         => $request->lawyerUserId,
                'payment_id'        => $charge->id,
            ]);

            $lawyer = User::whereId($request->lawyerUserId)->first();
            $slot = DaysSlot::whereId($request->daySlotId)->first();
            if(str_contains($slot->slot_start_time, "am")) {
                $startTime = str_replace("am", "", $slot->slot_start_time);
            }else {            
                $startTime = str_replace("pm", "", $slot->slot_start_time);
            }
            $endTime = $slot->slot_end_time;
            if(str_contains($endTime, "am")) {
                $endTime = str_replace("am", "", $endTime);
            }else {            
                $endTime = str_replace("pm", "", $endTime);
            }
            $duration = $this->getDuration($request->date, $startTime, $endTime);
            $data = [];
            
            $data['topic']      = "One to one meeting for";
            $data['start_time'] = $request->date.'T'.$startTime.':00';
            $data['end_time'] = $request->date.'T'.$endTime.':00';
            $data['duration'] = $duration;
            $data['agenda'] = "Meeting Agenda";
            $data['host_video'] = 1;
            $data['participant_video'] = 1;
            $data['email'] = $lawyer->email;
            $data['daySlotId'] = $slot->id;
            $data['paymentId'] = $payment->id;
            $this->create($data);
            

            return redirect()->route('book-a-meeting', $request->lawyerId)->with('success', "Meeting scheduled successfully");
        } else {
            return redirect()->route('book-a-meeting', $request->lawyerId)->with('danger', "Payment Failed");
        }
    }

    public function getDuration($date, $startTime, $endTime) {
        $time1 = new DateTime($date.' '.$startTime.':00');
        $time2 = new DateTime($date.' '.$endTime.':00');
        $duration = $time1->diff($time2);
        return (int) $duration->format('%i');
    }

    private function createToken($cardData) {
        $token = null;
        try {
            $stripe = new StripeClient(env('STRIPE_SECRET'));
            $token = $stripe->tokens->create([
                'card' => [
                    'number' => $cardData['cardNumber'],
                    'exp_month' => $cardData['month'],
                    'exp_year' => $cardData['year'],
                    'cvc' => $cardData['cvv']
                ]
            ]);
        } catch (CardException $e) {
            $token['error'] = $e->getError()->message;
        } catch (Exception $e) {
            $token['error'] = $e->getMessage();
        }
        return $token;
    }

    private function createCharge($tokenId, $amount) {
        $charge = null;
        try {
            $stripe = new StripeClient(env('STRIPE_SECRET'));
            $charge = $stripe->charges->create([
                'amount' => $amount * 100,
                'currency' => 'aed',
                'source' => $tokenId,
                'description' => 'My second payment'
            ]);
        } catch (Exception $e) {
            $charge['error'] = $e->getMessage();
        }
        return $charge;
    }
}