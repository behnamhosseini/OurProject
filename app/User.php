<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Cache;

class User extends Authenticatable
{
    use Notifiable;


    protected $casts = [
        'socialMedia' => 'array',
        'interests' => 'array',
        'profilePictures' => 'array'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded=[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }

    public function getLastActivityAttribute($value)
    {
        return jdate($value);
    }
    public function getCreatedAtAttribute($value)
    {
        return jdate($value);
    }
    public function getProfilePicturesAttribute($value)
    {
        $value = json_decode($value, true);
        $result = $value;
        if($value['everyOne'] == null)
        {
            $result['everyOne'] = $value['defaultProfile'];

        }
        if($value['friends'] == null)
        {
            $result['friends'] = $value['defaultProfile'];

        }
        if($value['family'] == null)
        {
            $result['family'] = $value['defaultProfile'];

        }
        if($value['relatives'] == null)
        {
            $result['relatives'] = $value['defaultProfile'];

        }
        
        if($value['header'] == null)
        {
            $result['header'] = $value['defaultHeader'];

        }
        return $result;
    }
    public function getRouteKeyName()
    {
        return 'userName';
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function fullName()
    {
         return $this->firstName . ' ' . $this->lastName;
    }
    public static function checkFollowing($targetUserId)
    {
        $f = Follow::where('user_id', auth()->user()->id)->where('target_id', $targetUserId)->where('status', 1)->get()->all();
        if(empty($f))
            return false;
        else
            return true;
    }
}
