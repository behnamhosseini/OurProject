<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Nexmo\Client\Exception\Validation;

class CommentController extends Controller
{
    public function sendComment(Request $request)
    {
        Validator::make($request->all(),[
            'body' => 'required|min:1|max:500',
            'post_id' => 'required',
            'user_id' => 'required'
        ]);
        $likeUser['id'][] = json_decode(0);
        $likeUser['count'] = 0;
        Comment::create([
           'user_id' => $request->user_id,
           'body' => $request->body,
            'post_id' => $request->post_id,
            'likeCount' => $likeUser,
        ]);
        return "ok";
    }
    public function get(Post $post)
    {
        return $post->with('comments')->get();
    }
}
