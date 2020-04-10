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
        Page::create(array_merge(
            $this->getValidatedAttributes($request),
            [
                'slug' => Str::slug($request->name),
                'creator_id' => Auth::id(),
            ]
        ));

        return $this->redirectToIndex();
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit')
            ->withPage($page);
    }

    public function update(Request $request, Page $page)
    {
        $page->update(array_merge(
            $this->getValidatedAttributes($request),
            ['slug' => Str::slug($request->name)]
        ));

        flash('Page has been updated successfully!')->success();

        return $this->redirectToIndex();
    }

    public function destroy(Page $page)
    {
        $page->delete();

        flash('Page has been deleted successfully!')->success();

        return $this->redirectToIndex();
    }

    protected function redirectToIndex()
    {
        return redirect()->route('admin.pages.index');
    }

    protected function getValidatedAttributes(Request $request): array
    {
        return $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);
    }
}
