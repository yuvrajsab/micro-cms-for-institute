<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index')
            ->withPosts(Post::with('author')->latest()->get());
    }

    public function create()
    {
        return view('admin.posts.create')
            ->withCategories(Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'slug' => $this->generateUniqueSlug($request->title),
            'category_id' => $request->category_id,
            'body' => $request->body,
            'author_id' => Auth::id(),
        ]);

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show')
            ->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->title,
            'slug' => $this->generateUniqueSlug($request->title),
            'category_id' => $request->category_id,
            'body' => $request->body,
        ]);

        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index');
    }

    public function publish(Post $post)
    {
        $post->publish();

        return redirect()->route('admin.posts.index');
    }

    /**
     * Generate a unique slug for the given text
     * Ex: 2020-04-01-my-first-post
     *
     * @param String $text
     * @return String
     */
    protected function generateUniqueSlug(String $text): String
    {
        return now()->toDateString().'-'.Str::slug($text);
    }
}
