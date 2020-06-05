<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = ['name', 'url', 'group_id'];

    protected static function boot()
    {
        parent::boot();

        static::created(function () {
            Navigation::clearCached();
        });

        static::updated(function () {
            Navigation::clearCached();
        });

        static::deleted(function () {
            Navigation::clearCached();
        });
    }

    public function group()
    {
        return $this->belongsTo(MenuGroup::class);
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}
