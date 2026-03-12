<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function profile()
    {

        $user = Auth::user();
        return view('profiles.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'username' => 'required|min: 2|max: 12',
            'email' => 'required|min: 5|max: 40|email|unique:users,email,' .Auth::id().',id',
            'password' => 'required|alpha_num|min: 8|max: 20|confirmed',
            'password_confirmation' => 'required|alpha_num|min: 8|max: 20',
            'bio' => 'max: 150',
            'icon-image' => 'mimes:jpg,png,bmp,gif,svg',
        ]);

        $id = Auth::id();
        $up_username = $request->input('username');
        $up_email = $request->input('email');
        $up_password = $request->input('password');
        $up_bio = $request->input('bio');

        $up_icon = null;
       if($request->hasFile('icon-image')) {
         $up_icon = $request->file('icon-image')->store('public/images/');
        }



        User::where('id', $id)->update([
            'username' => $up_username,
            'email' => $up_email,
            'password' => Hash::make($up_password),
            'bio' => $up_bio,
            'icon_image' => $up_icon ?basename($up_icon):User::find($id)->icon_image
        ]);



        return redirect()->route('top');
    }
    public function __construct()
    {
       $this->middleware('auth');
    }
}
