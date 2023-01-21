<?php

namespace App\Http\Controllers\Common;

use Alert;
use App\Events\LawyerLoginLogout;
use App\Http\Controllers\Controller;
use App\Traits\SendMailTrait;
use App\Models\Lawyer;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use \Mailjet\Resources;

class LoginController extends Controller
{
    use SendMailTrait;

    public function unauthenticated() {
        return view('lawyer.layouts.unauthenticated');
    }

    public function login() {
        return view('login');
    }

    public function register() {     
        // return view('lawyer.register');
        return view('lawyer.pages.register');
    }

    public function registerLawyer(Request $request) {
        // print_r($request->all());exit;
        $request->validate([
            'name'              =>          ['required', 'string', 'max:255'],
            'email'             =>          ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'          =>          ['required', Rules\Password::defaults()],
            'contact_number'    =>          ['required', 'numeric'],
            'position'          =>          ['required', 'string', 'max:255'],
            'linkedin'          =>          ['required', 'string', 'max:255'],
        ]);
            
        $user = User::create([
            'prefix' => $request->pref,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => 2,
        ]);

        Lawyer::create([
            'user_id' => $user->id,
            'law_firm_name' => $request->lawfirm_name,
            'law_firm_website' => $request->lawfirm_website,
            'emirates' => $request->emirate,
            'office_address' => $request->office_address,            
            'contact_number' => $request->contact_number,
            'landline_number' => $request->landline_number,
            'position' => $request->position,
            'linkedin_profile' => $request->linkedin,
            'calendly_link' => $request->calendly_link,
        ]);

        event(new Registered($user));

        // Auth::login($user);

        $response = $this->sendEmail($request->email, 'Registration Successful');
        
        // $response->success() && var_dump($response->getData());
        Alert::success('Success', 'Your registration was successful. Please check your email');
        return redirect('/');
    }
    
    public function userLogin(Request $request) {
        // $request->validate([
        //     'g-recaptcha-response' => 'required|string',
        // ]);
        
        // $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        //     'secret' => config('services.recaptcha.secret_key'),
        //     'response' => $request->get('g-recaptcha-response'),
        //     'remoteip' => $request->getClientIp(),
        // ]);
        
        // if (! $response->json('success')) {
        //     // throw ValidationException::withMessages(['g-recaptcha-response' => 'Error verifying reCAPTCHA, please try again.']);
        //     return redirect()->route('home')->with('error','Error verifying reCAPTCHA, please try again.');
        // }else {
        //     // print_r($request->all());exit;
            $user = User::whereEmail($request->email)->first();
            if($user) {
                if (Hash::check($request->password, $user->password)) {
                    if($user->user_type == 1) {
                        Alert::error('Login Failed', 'Please check your credentials');
                        return redirect()->route('home');
                    }
                    if($user->user_type == 2) {
                        $checkIsVerifiedUser = Lawyer::whereUserId($user->id)->first();
                        if($checkIsVerifiedUser->is_verified) {
                            Auth::login($user);
                            Cache::put('user-is-online-' . Auth::user()->id, true);  
                            event(new LawyerLoginLogout(auth()->user()->id, 'lawyerLoginLogout'));
                            return redirect(RouteServiceProvider::LAWYER_HOME);
                        }else {
                            Alert::error('Not Verified', 'You are not yet verified by the admin');
                            return redirect()->route('home');
                        }
                    }else {
                        Auth::login($user);
                        Alert::success('Logged In', 'You are logged in successfully');
                        // return redirect(RouteServiceProvider::HOME);   
                        return Redirect::to(url()->previous());         
                    }
                }else {
                    Alert::error('Login Failed', 'Please check your password');
                    return redirect()->route('home');
                }
            }else {
                Alert::error('Login Failed', 'There is no existing user with given Email ID');
                return redirect()->route('home');
            }
        // }
    }

    public function adminLoginPage() {
        if(auth()->user()) {
            return redirect(RouteServiceProvider::ADMIN_HOME);
        }
        return view('admin.login');
    }

    public function adminLogin(Request $request) {
        // print_r($request->all());exit;
        $user = User::where([
            'email'     => $request->email,
            'user_type' => 1
        ])->first();
        if($user) {
            if (!Hash::check($request->password, $user->password)) {
                Alert::error('Login Failed', 'Please check your password');
                return redirect()->route('admin.login');    
            }else {
                Auth::login($user);
                return redirect(RouteServiceProvider::ADMIN_HOME);
            }
        }else {
            Alert::error('Login Failed', 'Please check your email address');
            return redirect()->route('admin.login');
        }
    }

    public function logout(Request $request) {
        if(auth()->user()->user_type == 2) {
            event(new LawyerLoginLogout(auth()->user()->id, 'lawyerLoginLogout'));
            // last seen
            Lawyer::where('user_id', auth()->user()->id)->update(['last_active_at' => (new \DateTime())->format("Y-m-d H:i:s")]);
            Cache::forget('user-is-online-' . Auth::user()->id);
        }
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
