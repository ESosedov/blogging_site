<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'search' => 'required'
        ]);

        $search = $request->search;
        $posts = Post::like($search)->with('category')->paginate(3);
        return view('home.search2', compact('posts', 'search'));
    }
}
