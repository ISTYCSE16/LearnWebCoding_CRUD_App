<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post, Request $request)
    {
        // dd(auth()->id());
        $data = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'comment' => 'required',
        ]);
        
        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->commenter_id = auth()->id();
        $comment->commenter_name = auth()->user()->name;
        $comment->comment = $request->comment;
        $comment->save();

        return redirect("/");
    }

}
