<?php

namespace App\Models;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $uuidVersion = 1;
}
