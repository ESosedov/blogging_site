<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            's' => 'required'
        ]);

        $s = $request->s;
        $posts = Post::like($s)->with('category')->paginate(2);
        return view('home.search2', compact('posts', 's'));
    }
}
