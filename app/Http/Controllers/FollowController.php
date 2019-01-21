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


    public function sendFollowRequest()
    {
//
//        Validator::make(\request()->all(),[
//            'targetUserName' => 'required|string'
//        ]);
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
    public function acceptFollowRequest()
    {
        // meaning of the status codes:
        // 0 => waiting
        // 1 => accepted when your account is public
        // 2 => friend
        // 3 => family
        // 4 => relative
//        return \request();
        $requestUser = str_replace('acceptFollowRequestButton-', '',\request('requestUserName'));
        Validator::make(\request()->all(),[
            'requestUserName' => 'required|string'
        ]);
        $followStatement = Follow::where('user_id', $requestUser)->where('target_id', $this->authUser())->get()->first();
        if($followStatement->status == 0)
        {
            switch (\request('type'))
            {
                case 'regular':
                    {
                        $status = '1';
                        break;
                    }
                case 'friend':
                    {
                        $status = '2';
                        break;
                    }
                case 'family':
                    {
                        $status = '3';
                        break;
                    }
                case 'relative':
                    {
                        $status = '4';
                        break;
                    }
            }
            $followStatement->update([
               'status' => $status
            ]);
            $status = "followAccepted";
        }

        return $status;
    }
    public function denyFollowRequest()
    {
        $requestUser = str_replace('denyFollowRequestButton-', '',\request('requestUserName'));
        Validator::make(\request()->all(),[
            'requestUserName' => 'required|string'
        ]);
        $followStatement = Follow::where('user_id', $requestUser)->where('target_id', $this->authUser())->get()->first();
        if($followStatement->status == 0)
        {
            $followStatement->delete();
            $status = "followDenied";
        }
        return $status;

    }
    public function cancelFollowing()
    {
        $requestUser = str_replace('cancelFollowRequestButton-', '',\request('requestUserName'));
        Validator::make(\request()->all(),[
            'requestUserName' => 'required|string'
        ]);
        $followStatement = Follow::where('user_id', $requestUser)->where('target_id', $this->authUser())->get()->first();
        if($followStatement->status != 0)
        {
            $followStatement->delete();
            $status = "followCancelled";
        }
        return $status;
    }
}
