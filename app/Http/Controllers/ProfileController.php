<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function profile(){

        $user = Auth::user();
        return view('profiles.profile',compact('user'));
    }

    public function updateProfile(Request $request){

         $request->validate([
            'username' => 'required|min:2|max:12',
            'email' => 'required|string|email|min:5|max:40|unique:user|.Auth::user()->email.',
            'password' => 'required|alpha_num|min:5|max:20|confirmed',
            'password_confirmation' => 'required|alpha_num|min:5|max:20',
            'bio' => 'max:150'
        ]);

        $id = $request->input('id');
        $up_username = $request->input('up_username');
        $up_email = $request->input('up_email');
        $up_password = $request->input('up_password');
        $up_bio = $request->input('up_bio');
        $up_image = $request->input('up_image');

        Auth::where('id', $id)->update([
            'username' => $up_username,
            'email' => $up_email,
            'password' => $up_password,
            'bio' => $up_bio,
            'image' => $up_image
        ]);

        return redirect('/profile');
    }
}
