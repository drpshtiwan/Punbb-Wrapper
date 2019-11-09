<?php

namespace App\Model;

use App\Resources\UserResource;
use Illuminate\Database\Eloquent\Model  as Eloquent;

class User extends Eloquent
{
    public function group()
    {
        return $this->belongsTo(Group::class,'group_id','g_id');
    }

    public static function getByUsername($username)
    {
        return self::where('username',$username)->first();
    }

    public static function byUsernameResource($username)
    {
        $user = self::getByUsername($username);
        return ($user != null) ? UserResource::single($user):null;
    }
}