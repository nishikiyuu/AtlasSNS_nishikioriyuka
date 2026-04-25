<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Follow;


class UsersController extends Controller
{
    public function search(Request $request){
        $keyword = $request->input('keyword');
        if(!empty($keyword)){
            $users = User::where('username','like', '%'.$keyword.'%')->get();
        }else{
            $users = User::all();
        }
        return view('users.search',compact('users','keyword'));
    }

    public function follow(Request $request){
        $following_id = $request->following_id;
        $isfollow = Follow::where('id', Auth::user()->id)->where('following_id', $following_id)->first();

        if($isfollow){
            $unfollow = Follow::where('id', Auth::user()->id)->where('following_id', $following_id);
            $unfollow->delete();
        }else{
            $follow = new follow();
            $follow->id = Auth::user()->id;
            $follow->following_id = $following_id;
            $follow->save();
        }

        return back();
    }

    public function user(){
        return $this->hasMany(User::class);
    }
    public function __construct()
    {
       $this->middleware('auth');
    }
}
