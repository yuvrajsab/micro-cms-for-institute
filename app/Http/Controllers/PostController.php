<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index')
            ->withPosts(Post::whereNotNull('published_at')->orderBy('published_at', 'desc')->paginate(10));
    }

    public function show(Post $post)
    {
        return view('posts.show')
            ->withPost($post);
    }
}
