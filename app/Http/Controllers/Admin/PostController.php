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
        Post::create(array_merge(
            $this->getValidatedAttributes($request),
            [
                'slug' => $this->generateUniqueSlug($request->title),
                'author_id' => Auth::id(),
            ]
        ));

        flash('Post has been created successfully!')->success();

        return $this->redirectToIndex();
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
    public function edit(Post $post)
    {
        return view('admin.posts.edit')
            ->withCategories(Category::all())
            ->withPost($post);
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
        $post->update(array_merge(
            $this->getValidatedAttributes($request),
            ['slug' => $this->generateUniqueSlug($request->title)]
        ));

        flash('Post has been updated successfully!')->success();

        return $this->redirectToIndex();
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

        flash('Post has been deleted successfully!')->success();

        return $this->redirectToIndex();
    }

    public function publish(Post $post)
    {
        $post->publish();

        return $this->redirectToIndex();
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

    protected function getValidatedAttributes(Request $request): array
    {
        return $request->validate([
            'title' => 'required|min:3',
            'category_id' => 'required|exists:categories,id',
            'body' => 'required',
        ]);
    }

    protected function redirectToIndex()
    {
        return redirect()->route('admin.posts.index');
    }
}
