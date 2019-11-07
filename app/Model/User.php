<?php

namespace App\Model;

use App\Resources\UserResource;
use Illuminate\Database\Eloquent\Model  as Eloquent;

class User extends Eloquent
{

    // protected $primaryKey = 'username';
    
    public function group()
    {
        return $this->belongsTo(Group::class,'group_id','g_id');
    }

    public static function getByUsername($username)
    {
        return self::find($username);
    }

    public static function byUsernameResource($username)
    {
        return UserResource::single(self::getByUsername($username));
    }
}