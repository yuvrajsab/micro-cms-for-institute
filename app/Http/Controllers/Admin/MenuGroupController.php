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
            'type' => $request->type,
        ]);

        flash('Menu group has been successfully created!')->success();

        return redirect()->route('admin.menu-groups.index');
    }

    public function edit(MenuGroup $menuGroup)
    {
        return view('admin.menu.groups.edit')
            ->withGroup($menuGroup);
    }

    public function update(MenuGroup $menuGroup, Request $request)
    {
        $menuGroup->update([
            'name' => $request->name,
            'type' => $request->type,
        ]);

        flash('Menu group has been successfuly updated!')->success();

        return redirect()->route('admin.menu-groups.index');
    }

    public function destroy(MenuGroup $menuGroup)
    {
        $menuGroup->delete();

        flash('Menu group has been successfully deleted!')->success();

        return redirect()->route('admin.menu-groups.index');
    }
}
