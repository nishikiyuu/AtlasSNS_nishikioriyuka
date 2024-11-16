<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{
    //
    public function FollowsController(){
        return view('follows.followList');
    }
    public function followerList(){
        return view('follows.followerList');
    }
}
