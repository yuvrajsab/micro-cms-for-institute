<?php

namespace App;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class Navigation
{
    protected static function build(String $type): Collection
    {
        return collect([
            MenuGroup::has('items')->with('items')->where('type', $type)->get(),
            MenuItem::whereNull('group_id')->where('type', $type)->get(),
        ])->flatten()->sortBy('name');
    }

    protected static function cache()
    {
        Cache::forever('primaryMenu', static::build('primary'));
        Cache::forever('secondaryMenu', static::build('secondary'));
    }

    public static function isPrimaryMenuCached()
    {
        return Cache::has('primaryMenu');
    }

    public static function isSecondaryMenuCached()
    {
        return Cache::has('secondaryMenu');
    }

    public static function clearCached()
    {
        Cache::forget('primaryMenu');
        Cache::forget('secondaryMenu');
    }

    public static function getPrimaryMenu(): Collection
    {
        return Cache::get('primaryMenu', tap(static::build('primary'), static::cache()));
    }

    public static function getSecondaryMenu(): Collection
    {
        return Cache::get('secondaryMenu', tap(static::build('secondary'), static::cache()));
    }
}
