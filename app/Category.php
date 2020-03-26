<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'description'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
