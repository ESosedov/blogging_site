<?php

namespace App\Http\Controllers;


use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->with('category')->orderBy('id', 'desc')->paginate(3);
        return view('tags.show2', compact('tag', 'posts'));
    }
}
