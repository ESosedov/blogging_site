<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(3);
        return view('home.index2', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->views += 1;
        $post->update();


        return view('home.show2', compact('post'));
    }
}
