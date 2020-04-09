<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = ['name', 'url', 'location', 'group_id'];

    public function group()
    {
        return $this->belongsTo(MenuGroup::class);
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}
