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
            ->withCategories(Category::with('creator')->get());
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

    public function create()
    {
        return view('admin.categories.create');
    }
}
