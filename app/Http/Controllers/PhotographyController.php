<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PhotographyController extends Controller
{
    public function index()
    {

        $posts = Post::with('category')->orderBy('id')->get();
        return view('photography.show', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->views += 1;
        $post->update();


        return view('home.show2', compact('post'));
    }
}
