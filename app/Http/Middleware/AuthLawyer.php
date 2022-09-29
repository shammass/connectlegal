<?php

namespace App\Http\Middleware;

use App\Models\Lawyer;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthLawyer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('unauthenticated');
        }
        if(auth()->user()->user_type == 2) {
            $isVerified = Lawyer::whereUserId(auth()->user()->id)->first();
            if($isVerified->is_verified) {
                return $next($request);
            }else {
                return redirect()->route('unauthenticated');
            }
        }
        return redirect()->route('unauthenticated');
        // abort(403);
    }
}
