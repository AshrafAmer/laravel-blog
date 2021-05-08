<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comment extends Model
{
    use SoftDeletes;
    protected $table = 'comments';
    protected $fillable = ['comment','active','approved_by', 'article_id'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}