<?php

namespace App\Http\Controllers;

use App\Follow;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Lcobucci\JWT\Claim\Validatable;

class FollowController extends Controller
{
    public function sendFriendRequest()
    {

        Validator::make(\request()->all(),[
            'targetUserName' => 'required|alpha'
        ]);
//        return \request();
        // status = 1 means accepted
        // status = 0 means waiting
        $user = auth()->user()->id;
        $targetUser = User::where('userName', request('targetUserName'))->get()->first();
        $status = $targetUser->accountType == 'public' ? 1 : 0;
        if(!Follow::where('user_id',$user)->where('target_id',$targetUser->id)->first()){
            Follow::create([
                'user_id' => $user,
                'target_id' => $targetUser->id,
                'status' => $status
            ]);

        }
    }

    public function checkFollowStatus()
    {
        Validator::make(\request()->all(),[
            'targetUserName' => 'required|alpha'
        ]);
        $user = auth()->user()->id;
        $targetUser = User::where('userName', request('targetUserName'))->get()->first();
        $status = Follow::where('user_id',$user)->where('target_id',$targetUser->id)->first()->status;
        return $status;
    }
}
