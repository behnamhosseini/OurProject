<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Carbon\Carbon;
use Validator;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{

    public function sendPost(Request $request)
    {
        $imageUrl = "";
        if ($request->imageUrl) {
            $data = $request->imageUrl;
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);
            $image_name = time() . '.png';
            if (!file_exists(public_path() . "/uploads/" . auth()->user()->userName . "/post-image/")) {
                mkdir(public_path() . "/uploads/" . auth()->user()->userName . "/post-image/", 0755, true);
            }
            $imageUrl = public_path() . "/uploads/" . auth()->user()->userName . "/post-image/" . $image_name;
            file_put_contents($imageUrl, $data);
        }
        $postType = "post";

        $roll = [
            "user_id" => "required|numeric",
            "body" => "required|min:1|max:5000|",
            "mood" => "required|alpha|max:10",
            "location" => "alpha|max:30",
        ];

        if ($request->postType == "vip") {
            if (auth()->user()->credit >= 1000) {
                $postType = "vip";
            } else {
                alert()->success('خر خودتی!')->persistent('فهمیدی؟');
                return back();
            }
        }
        if (!$imageUrl == "") {
            $img = strstr($imageUrl, '/upload');
        } else {
            $img = null;
        }
        $likeUser = '{"id":{},"count":0}';

        Validator::make($request->all(), $roll);
        Post::create([
            'user_id' => $request->user_id,
            'body' => $request->body,
            'mood' => $request->mood,
            'location' => $request->Location,
            'imageUrl' => $img,
            'postType' => $postType,
            'likeCount' => $likeUser,
        ]);

        return redirect()->back();

    }

    public function editPost(Post $post)
    {
        $validator = Validator::make(\request()->all(), [
            "user_id" => "required|numeric",
            "body" => "required|min:1|max:5000",
            "mood" => "alpha|max:10",
            "location" => "string|max:30"
        ]);
        if ($validator->fails()) {
            alert()->warning('توی وارد کردن اطلاعات دقت کن')->persistent('فهمیدم');
            return back()->withErrors($validator);
        }

        $postType = "post";
        if (request('postType') == "vip") {
            if (auth()->user()->credit >= 1000) {
                $postType = "vip";
            } else {
                alert()->success('خر خودتی!')->persistent('فهمیدی؟');
                return back();
            }
        }
        $post->update([
            'body' => request('body'),
            'imageUrl' => request('imageUrl'),
            'location' => request('location'),
            'postType' => $postType
        ]);
        $title = " عزیز!" . $post->user->firstName;
        alert()->success('پست مورد نظر با موفقیت ویرایش شد', $title)->persistent('اوکی');
        return back();
    }

    public function removePost(Post $post)
    {
        $post->delete();

        $title = " عزیز!" . $post->user->firstName;
        alert()->success('پست مورد نظر با موفقیت حذف شد', $title)->persistent('اوکی');
        return back();
    }

    public function likePost(Request $request)
    {

        $likeUser = Post::whereId($request->post_id)->get()->first()->likeCount;
        $functur = $request->functur;
        if ($likeUser !== null) {
            if (in_array($functur, $likeUser['id'])) {
                $key = array_search($functur, $likeUser['id']);
                unset($likeUser['id'][$key], $functur);
                $likeUser['count'] = $likeUser['count'] - 1;
                Post::whereId($request->post_id)->update([
                    'likeCount' => json_encode($likeUser),
                ]);
                return $likeUser['count'];
            } else {
                $likeUser['id'][] = json_decode($functur);
                $likeUser['count'] = $likeUser['count'] + 1;
                Post::whereId($request->post_id)->update([
                    'likeCount' => json_encode($likeUser),
                ]);
                return $likeUser['count'];
            }
        } else {
            $likeUser['id'][] = json_decode($functur);
            $likeUser['count'] = 1;
            Post::whereId($request->post_id)->update([
                'likeCount' => json_encode($likeUser),
            ]);
            return $likeUser['count'];
        }
    }
}
