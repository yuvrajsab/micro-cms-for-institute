<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuGroup extends Model
{
    protected $fillable = ['name', 'location'];

    public function items()
    {
        return $this->hasMany(MenuItem::class, 'group_id');
    }
}
