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
        MenuItem::create([
            'name' => $request->name,
            'url' => $request->url,
            'location' => $request->location,
            'group_id' => $request->group_id,
        ]);

        flash('Menu item has been successfully created!')->success();

        return redirect()->route('admin.menu-items.index');
    }
}
