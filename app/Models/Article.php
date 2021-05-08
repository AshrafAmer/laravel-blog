<?php

namespace App\Models;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $uuidVersion = 1;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->where('active', 1);
    }
}
