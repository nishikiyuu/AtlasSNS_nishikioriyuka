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
            'post' => 'required|max:150'
        ]);

        $user_id = Auth::user()->id;
         //DD($user_id);
        $post = $request->input('post');
        //$post = $request->input('user_id');

        Post::create([
                'post' => $post,
                'user_id' => $user_id]);
        return back();
    }

    public function update(Request $request)
    {
        $user_id = Auth::id();
        $id = $request->input('id');
        $up_post = $request->input('up_post');
        Post::where('id', $id)->update([
            'post' => $up_post
        ]);
        return redirect('/top');
    }

    public function delete($id)
    {
        $user_id = Auth::id();
        Post::where('id', $id)->delete();
        return redirect('/top');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
