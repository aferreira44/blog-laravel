<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreComment;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    public function store(StoreComment $request, Post $post)
    {
        // Create a new post using the request data and save it to the database
        $post->addComment(request('body'));

        // Logging
        Log::info("Comment Created on post_id(" . $post->id . ") : " . request('body'));

        // And then redirect to the home page
        return redirect('/posts/' . $post->id);
    }
}
