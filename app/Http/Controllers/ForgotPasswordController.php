<?php

namespace App\Http\Controllers;

use Alert;
use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use Illuminate\Http\Request; 
use Carbon\Carbon; 
use App\Models\User; 
use Mail; 
use Hash;
use Illuminate\Support\Str;
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
    public function submitForgotPasswordForm(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        PasswordReset::create([
            'email' => $request->email, 
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
                            'Email' => $request->email,
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
        Session::put('success', 'Success');
        // Alert::success('Email Sent', 'Please check the email address '.$request->email.' for instructions to reset your password. if you dont have received any email, please check your spam folder.');
        return back()->with('message', 'We have e-mailed your password reset link!');
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