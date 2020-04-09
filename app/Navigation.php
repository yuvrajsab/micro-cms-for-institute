<?php

namespace App;

use Illuminate\Support\Collection;

class Navigation
{
    protected static function buildNav(String $location): Collection
    {
        return collect([
            MenuGroup::has('items')->with('items')->where('location', $location)->get(),
            MenuItem::whereNull('group_id')->where('location', $location)->get(),
        ])->flatten()->sortBy('name');
    }

    public static function getTopNav()
    {
        return static::buildNav('top');
    }

    public static function getMainNav()
    {
        return static::buildNav('main');
    }
}
