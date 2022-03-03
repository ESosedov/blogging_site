<?php

namespace App\Http\Controllers\Post\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{


    public function store(Request $request, $slug)
    {
        $validatedData = $request->validate([
            'body' => 'required|max:255',
            'post_id' => 'required'
        ]);
        $validatedData['user_id'] = Auth::user()->id;
        Comment::create($validatedData);

        return redirect()->route('posts.single', compact('slug'));
    }

    public function update(Request $request, $id)
    {

        $post = Post::find($id);
        $data = $request->all();

        if ($file = Post::uploadImage($request, $post->thumbnail)) {
            $data['thumbnail'] = $file;
        }

        $post->update($data);
        $post->tags()->sync($request->tags);


        return redirect()->route('posts.index')->with('success', "Пост был успешно изменен.");
    }

    public function destroy($slug, $id)
    {

        $comment = Comment::find($id);
        if(Auth::user()->id == $comment->user_id or Auth::user()->is_admin){
            $comment->delete();
            return redirect()->back()->with('success', "Комментарий был успешно удален.");
        }
        return redirect()->back()->with('error', "Чужой комментарий нельзя удалить.");
    }
}
