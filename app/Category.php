<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'slug', 'description', 'creator_id'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function hasPosts(): bool
    {
        return $this->posts()->exists();
    }
}
