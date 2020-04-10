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
        Category::create(array_merge(
            $this->getValidatedAtrributes($request),
            [
                'slug' => Str::slug($request->name),
                'creator_id' => Auth::id(),
            ]
        ));

        flash('Category has been created successfully!')->success();

        return $this->redirectToIndex();
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit')
            ->withCategory($category);
    }

    public function update(Request $request, Category $category)
    {
        $category->update(array_merge(
            $this->getValidatedAtrributes($request),
            [
                'slug' => Str::slug($request->name),
            ]
        ));

        flash('Category has been updated successfully!')->success();

        return $this->redirectToIndex();
    }

    public function destroy(Category $category)
    {
        $this->delete($category);

        return $this->redirectToIndex();
    }

    public function restore(int $id)
    {
        $category = Category::withTrashed()->where('id', $id)->firstOrFail();
        $category->restore();

        flash('Category has been restored successfully!')->success();

        return $this->redirectToIndex();
    }

    protected function delete(Category $category)
    {
        if (!$category->hasPosts()) {
            $category->forceDelete();

            flash('Category has been deleted successfully!')->success();
        } else {
            $category->delete();

            flash('Category has been partially deleted!')->warning();
        }
    }

    protected function redirectToIndex()
    {
        return redirect()->route('admin.categories.index');
    }

    protected function getValidatedAtrributes(Request $request): array
    {
        return $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    }
}
