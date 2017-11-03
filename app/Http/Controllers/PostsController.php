<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Post;
use App\Http\Requests\StorePost;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        $archives = Post::archives();

        return view('posts.index', compact('posts', 'archives'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePost $request)
    {
        // Create a new post using the request data and save it to the database
        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        // Logging
        Log::info("Post Created: " . request('title'));

        // And then redirect to the home page
        return redirect('/');
    }
}
