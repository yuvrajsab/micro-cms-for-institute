<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index')
            ->withCategories(Category::with('creator')->withTrashed()->get());
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'created_by' => Auth::id(),
        ]);

        flash('Category has been created successfully!')->success();

        return redirect()->route('admin.categories.index');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit')
            ->withCategory($category);
    }

    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
        ]);

        flash('Category has been updated successfully!')->success();

        return redirect()->route('admin.categories.index');
    }

    public function destroy(Category $category)
    {
        $this->delete($category);

        return redirect()->route('admin.categories.index');
    }

    public function restore(int $id)
    {
        $category = Category::withTrashed()->where('id', $id)->firstOrFail();
        $category->restore();

        flash('Category has been restored successfully!')->success();

        return redirect()->route('admin.categories.index');
    }

    protected function delete(Category $category)
    {
        if (!$category->posts()->exists()) {
            $category->forceDelete();

            flash('Category has been deleted successfully!')->success();
        } else {
            $category->delete();

            flash('Category has been partially deleted!')->warning();
        }
    }
}
