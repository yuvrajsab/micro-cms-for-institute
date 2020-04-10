<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\MenuGroup;
use App\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function index()
    {
        return view('admin.menu.items.index')
            ->withMenuItems(MenuItem::all());
    }

    public function create()
    {
        return view('admin.menu.items.create')
            ->withMenuGroups(MenuGroup::all());
    }

    public function store(Request $request)
    {
        MenuItem::create($this->getValidatedAttributes($request));

        flash('Menu item has been successfully created!')->success();

        return $this->redirectToIndex();
    }

    public function edit(MenuItem $menuItem)
    {
        return view('admin.menu.items.edit')
            ->withItem($menuItem)
            ->withMenuGroups(MenuGroup::all());
    }

    public function update(MenuItem $menuItem, Request $request)
    {
        $menuItem->update($this->getValidatedAttributes($request));

        flash('Menu item has been successfully updated')->success();

        return $this->redirectToIndex();
    }

    public function destroy(MenuItem $menuItem)
    {
        $menuItem->delete();

        flash('Menu item has been successfully deleted!')->success();

        return $this->redirectToIndex();
    }

    protected function redirectToIndex()
    {
        return redirect()->route('admin.menu-items.index');
    }

    protected function getValidatedAttributes(Request $request): array
    {
        return $request->validate([
            'name' => 'required',
            'url' => 'required',
            'type' => 'required|in:primary,secondary',
            'group_id' => 'nullable|exists:menu_groups,id',
        ]);
    }
}
