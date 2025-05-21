<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function search(){
        return view('users.search');
    }

    //public function index(){
      //  $users = User::all();
        //return view('users.search',//compact('users'));
    //}
}
