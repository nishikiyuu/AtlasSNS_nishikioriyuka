<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $user= User::get();
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|min:2|max:12',
            'email' => 'required|string|email|min:5|max:40',
            'password' => 'required|alpha_num|min:8|max:20|confirmed',
            'password_confirmation' => 'required|alpha_num|min:8|max:20'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $username = $request->input('username');
        $request->session()->put('username', $username);
        return redirect('added');
    }

    public function added(): View
    {
        $store = session()->get('username');
        return view('auth.added',['store'=>$store]);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
