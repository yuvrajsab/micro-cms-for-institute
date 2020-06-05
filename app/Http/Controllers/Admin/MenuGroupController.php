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
        MenuGroup::create($this->getValidatedAttributes($request));

        flash('Menu group has been successfully created!')->success();

        return $this->redirectToIndex();
    }

    public function edit(MenuGroup $menuGroup)
    {
        return view('admin.menu.groups.edit')
            ->withGroup($menuGroup);
    }

    public function update(MenuGroup $menuGroup, Request $request)
    {
        $menuGroup->update($this->getValidatedAttributes($request));

        flash('Menu group has been successfuly updated!')->success();

        return $this->redirectToIndex();
    }

    public function destroy(MenuGroup $menuGroup)
    {
        $menuGroup->delete();

        flash('Menu group has been successfully deleted!')->success();

        return $this->redirectToIndex();
    }

    protected function redirectToIndex()
    {
        return redirect()->route('admin.menu-groups.index');
    }

    protected function getValidatedAttributes(Request $request): array
    {
        return $request->validate([
            'name' => 'required',
        ]);
    }
}
