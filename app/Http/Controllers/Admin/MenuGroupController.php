<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\MenuGroup;
use Illuminate\Http\Request;

class MenuGroupController extends Controller
{
    public function index()
    {
        return view('admin.menu.groups.index')
            ->withMenuGroups(MenuGroup::all());
    }

    public function create()
    {
        return view('admin.menu.groups.create');
    }

    public function store(Request $request)
    {
        MenuGroup::create([
            'name' => $request->name,
            'location' => $request->location,
        ]);

        flash('Menu group has been successfully created!')->success();

        return redirect()->route('admin.menu-groups.index');
    }
}
