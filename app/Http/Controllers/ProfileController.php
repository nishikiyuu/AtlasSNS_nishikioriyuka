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
        $id = Auth::id();
        $up_username = $request->input('username');
        $up_email = $request->input('email');
        $up_password = $request->input('password');
        $up_bio = $request->input('bio');


        $icon_image = $request->file('icon-image');
        dd($icon_image);
        // ->store('public/images/');

        User::where('id', $id)->update([
            'username' => $up_username,
            'email' => $up_email,
            'password' => Hash::make($up_password),
            'bio' => $up_bio,
            'icon-image' => $icon_image
        ]);



        return redirect()->route('/top');
    }
}
