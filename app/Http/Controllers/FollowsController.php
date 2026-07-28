<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FollowsController extends Controller
{
    //


    public function FollowsController()
    {
        $followings = Auth::user()->following()->get();

        return view('follows.followList', compact('followings'));
    }
    public function followerList()
    {
        $followers = Auth::user()->followed()->get();
        return view('follows.followerList', compact('followers'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
