<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\Lawyer;
use App\Models\Post;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function community() {
        $user = auth()->user();
        $isLawyer = Lawyer::where([
            'user_id' => $user->id,
            'is_verified' => 1
        ])->first();

        if(!$isLawyer) {
            return redirect()->route('unauthenticated');
        }
        $posts = Post::whereNull('group_id')
        ->orderBy('created_at', 'DESC')
        ->get();
        $lawyers = Lawyer::where([
            ['user_id', '!=', $user->id],
            ['is_verified', 1]
        ])->get();

        return view('lawyer.community.community', compact('posts', 'lawyers'));
    }

    public function allLawyers() {
        $lawyers = Lawyer::whereIsVerified(1)->get();
        return view('lawyer.community.all-lawyers', compact('lawyers'));
    }

}
