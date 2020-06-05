<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuGroup extends Model
{
    protected $fillable = ['name'];

    public function items()
    {
        return $this->hasMany(MenuItem::class, 'group_id');
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}
