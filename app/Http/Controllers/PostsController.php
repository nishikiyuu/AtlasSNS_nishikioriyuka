<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index()
    {
        $post = Post::get();
        return view('posts.index');
    }

    // public function postCreate(Request $request){

    //     $user_id = Auth::user()->id;
    //      //DD($post);
    //     $post = $request->input('post');
    //     $post->save();
    //     return back();
    // }
}
