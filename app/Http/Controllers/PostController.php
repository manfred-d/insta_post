<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //$posts = Post::get();//return all posts
        $posts = Post::latest()->with(['user','likes'])->paginate(5);
        
        return view('posts.index',[
            'posts' => $posts
        ]);

    }

    public function show(Post $post)
    {
        return view('posts.show',[

        ]);
    }

    public function store(Request $request)
    {
        //dd('Yeey!');
        $this->validate($request, [
            'body'=>'required'
        ]);

        $request->user()->posts()->create([ //$request->only('body')
            'body' =>$request->body
        ]);//user_id filled automatically

        return back();
    }

    public function destroy(Post $post)
    {
        //dd($post);
        $this->authorize('delete',$post);

        $post->delete();

        return back();
    }

}
