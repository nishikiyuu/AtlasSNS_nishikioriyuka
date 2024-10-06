<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function postCreate(Request $request){
        $post = $request->input('post');
        Post::create(['post' => $post]);
        return back();
    }
}
