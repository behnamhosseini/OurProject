<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    // meaning of the status codes:
    // 0 => waiting
    // 1 => accepted when your account is public
    // 2 => friend
    // 3 => family
    // 4 => relative
    protected $guarded  = [];
}
