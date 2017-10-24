<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Post;
use App\Http\Requests\StorePost;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show()
    {
        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePost $request)
    {
        // Create a new post using the request data and save it to the database
        Post::create(request(['title', 'body']));

        // Logging
        Log::info("Post Created: " . request('title'));

        // And then redirect to the home page
        return redirect('/');
    }
}
