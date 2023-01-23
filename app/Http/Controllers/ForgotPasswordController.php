<?php

namespace App\Http\Controllers;

use Alert;
use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use App\Models\User; 
use Carbon\Carbon; 
use Hash;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Mail; 
use Mailjet\Resources;
use Session;
  
class ForgotPasswordController extends Controller
{
      /**
       * Write code on Method
       *
       * @return response()
       */
    public function showForgotPasswordForm() {
        return view('auth.forgot-password');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function forgotPwdEmail($email) {
        $this->sendForgotPasswordEmail($email);
        return "success";
    }

    public function submitForgotPasswordForm(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|exists:users',
        ]);
        if($validator->fails()) {
            Alert::error('Error', 'Please go back to the form to view the errors');
            return redirect()->route('home')->withErrors($validator);
        }
        $this->sendForgotPasswordEmail($request->email);
        return back();
    }

    public function sendForgotPasswordEmail($email) {
        $token = Str::random(64);

        PasswordReset::create([
            'email' => $email, 
            'token' => $token,
        ]);

        $apikey = env('MJ_APIKEY_PUBLIC');
        $apisecret = env('MJ_APIKEY_PRIVATE');

        $mj = new \Mailjet\Client($apikey, $apisecret,true,['version' => 'v3.1']);
        // $url = "https://127.0.0.1:8000/reset-password/".$token;
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "s4shamma@gmail.com",
                        'Name' => "Connect Legal"
                    ],
                    'To' => [
                        [
                            'Email' => $email,
                            'Name' => "You"
                        ]
                    ],
                    'Subject' => "Connect Legal: Reset Password",
                    // 'TextPart' => "Greetings from Mailjet!",
                    'HTMLPart' => "<h1>Forgot Password Email</h1>You can reset password from bellow link:
                                    <br>
                                    <a href=\"https://dev.test.connectlegal.ae/reset-password/".$token."\">Reset Password</a>"
                ]
            ]
        ];
        $mj->post(Resources::$Email, ['body' => $body]);
        Session::put('success', 'success');
        Session::put('email', $email);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm($token) { 
        return view('auth.forgot-password-link', ['token' => $token]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = PasswordReset::where([
                            'email' => $request->email, 
                            'token' => $request->token
                            ])
                            ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);

        PasswordReset::where(['email'=> $request->email])->delete();

        return redirect('/')->with('message', 'Your password has been changed!');
    }
}