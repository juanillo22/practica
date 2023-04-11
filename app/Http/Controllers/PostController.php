<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }


    public function index()
    {
        $posts = Post::all();

        return view ('posts.index', ['posts' => $posts]);

    }


    public function show(Post $post)
    {
        return view ('posts.show', ['post' => $post]);
    }


    public function create()
    {
        return view ('posts.create',['post' => new Post]);
    }


    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required']
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->save();

        session()->flash('status','Post creado');

        return redirect()->route('posts.index');
    }


    public function edit(Post $post)
    {
        return view ('posts.edit',['post' => $post]);
    }
    

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => ['required']
        ]);

        $post->title = $request->input('title');
        $post->save();

        session()->flash('status','Post actualizado');

        return redirect()->route('posts.index');
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('status','Post eliminado');

    }

}


