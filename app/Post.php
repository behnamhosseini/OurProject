<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $casts = [
        'likeCount' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setCommentAttribute($value)
    {
        $this->attributes['post'] = str_replace(PHP_EOL , "<br>" , $value);
    }
}
