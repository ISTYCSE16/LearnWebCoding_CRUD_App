<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function updatePost(Post $post, Request $request) {
        if (auth()->user()->id !== $post['user_id']) {
            return redirect('/');
        }

        $incoming_request = $request->validate([
            'title' => 'required',
            'body'  => 'required'
        ]);

        $incoming_request['title'] = strip_tags($incoming_request['title']);
        $incoming_request['body']  = strip_tags($incoming_request['body']);

        $post->update($incoming_request);
        return redirect('/');
    }

    public function showEditScreen(Post $post) {
        if (auth()->user()->id !== $post['user_id']) {
            return redirect('/');
        }
        return view('edit-post', ['post'=>$post]);
    }

    public function createPost(Request $request) {

        $incoming_request = $request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);

        $incoming_request['title'] = strip_tags($incoming_request['title']);
        $incoming_request['body']  = strip_tags($incoming_request['body']);
        $incoming_request['user_id'] = auth()->id();

        Post::create($incoming_request);

        return redirect('/');

    }
}
