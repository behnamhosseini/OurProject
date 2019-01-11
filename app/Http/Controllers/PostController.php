<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function sendPost(Request $request)
    {
        Post::create([
            'user_id'=> auth()->user()->id,
            'body'=>$request->post,
            'mood'=>$request->mood,
        ]);
        return redirect()->back();
    }
}
