<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;
use App\Models\User;



class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('posts.index', compact('posts'));
    }

     public function postCreate(Request $request){
        $request->validate([
            'Post' => 'required|max:150'
        ]);

        $user_id = Auth::user()->id;
         //DD($user_id);
        $post = $request->input('post');
        $post = $request->input('user_id');

        Post::create([
                'post' => $post,
                'user_id' => $user_id ]);
        return back();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
