<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        return view('admin.pages.index')
            ->withPages(Page::all());
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        Page::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'content' => $request->content,
            'creator_id' => Auth::id(),
        ]);

        return redirect()->route('admin.pages.index');
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit')
            ->withPage($page);
    }

    public function update(Request $request, Page $page)
    {
        $page->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'content' => $request->content,
        ]);

        flash('Page has been updated successfully!')->success();

        return redirect()->route('admin.pages.index');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        flash('Page has been deleted successfully!')->success();

        return redirect()->route('admin.pages.index');
    }
}
