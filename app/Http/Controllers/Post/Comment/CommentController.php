<?php

namespace App\Http\Controllers\Post\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{


    public function store( Request $request, $slug )
    {

        $data = $request->all();
        $data['user_id'] = auth()->user()->id;

        Comment::create($data);

        return redirect()->route('posts.single', compact('slug'));
    }
}
