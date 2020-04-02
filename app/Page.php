<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['name', 'slug', 'content', 'creator_id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function getUrlAttribute()
    {
        return url('pages/'.$this->slug);
    }
}
