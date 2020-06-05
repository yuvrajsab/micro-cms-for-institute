<?php

namespace App;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class Navigation
{
    protected static function build(): Collection
    {
        return collect([
            MenuGroup::has('items')->with('items')->get(),
            MenuItem::whereNull('group_id')->get(),
        ])->flatten()->sortBy('name');
    }

    protected static function cache()
    {
        Cache::forever('menu', static::build());
    }

    public static function isCached(): bool
    {
        return Cache::has('menu');
    }

    public static function clearCached()
    {
        Cache::forget('menu');
    }

    public static function get(): Collection
    {
        return Cache::get('menu', tap(static::build(), static::cache()));
    }
}
