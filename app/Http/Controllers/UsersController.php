<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Follow;


class UsersController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!empty($keyword)) {
            $users = User::where('username', 'like', '%' . $keyword . '%')->get();
        } else {
            $users = User::all();
        }
        return view('users.search', compact('users', 'keyword'));
    }

    public function follow($id)
    {
        Auth::user()->follow($id);
        return back();
    }

    public function unfollow($id)
    {
        Auth::user()->unfollow($id);
        return back();
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
