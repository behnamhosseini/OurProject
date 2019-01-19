<?php

namespace App\Http\Controllers;

use App\Follow;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Lcobucci\JWT\Claim\Validatable;

class FollowController extends Controller
{

    public function authUser()
    {
        return auth()->user()->id;
    }
    public function targetUser()
    {
        return User::where('userName', request('targetUserName'))->get()->first();
    }
    public function followRequest()
    {
        return Follow::where('user_id',$this->authUser())->where('target_id',$this->targetUser()->id)->first();
    }


    public function sendFriendRequest()
    {

        Validator::make(\request()->all(),[
            'targetUserName' => 'required|alpha'
        ]);
//        return \request();
        // status = 1 means accepted
        // status = 0 means waiting

        $status = $this->targetUser()->accountType == 'public' ? 1 : 0;
        if($this->authUser() != $this->targetUser()->id)
        {
            if(!$this->followRequest()){
                Follow::create([
                    'user_id' => $this->authUser(),
                    'target_id' => $this->targetUser()->id,
                    'status' => $status
                ]);
                if($this->targetUser()->accountType == 'private')
                {
                    return "friendRequestDonePrivate";
                } else {
                    return "friendRequestDonePublic";
                }
            } else {
                $follow = $this->followRequest();
                $follow->delete();
                return "CancelFriendRequestDone";
            }
        }
    }

    public function checkFollowStatus()
    {
        Validator::make(\request()->all(),[
            'targetUserName' => 'required|alpha'
        ]);
        if($this->followRequest() != null)
        {
            $status = $this->followRequest()->status;
        } else {
            $status = "notFollowed";
        }

        return $status;
    }
}
