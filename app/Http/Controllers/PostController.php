<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        return view('posts.index')
            ->withPosts(Post::latest()->get());
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        Post::create($this->getValidatedAttributes($request));

        return redirect()->route('posts');
    }

    public function edit(Post $post)
    {
        return view('posts.edit')->withPost($post);
    }

    public function update(Post $post, Request $request)
    {
        $post->update($this->getValidatedAttributes($request));

        return redirect()->route('posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts');
    }

    protected function getValidatedAttributes(Request $request): array
    {
        return $request->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ]);
    }
}
