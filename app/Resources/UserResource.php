<?php

namespace App\Resources;

use App\Utils\Date;

class UserResource extends Resource
{
    public static function map($item)
    {
        return [
            'id' => $item->id,
            'username' => $item->username,
            'realname' => $item->realname,
            'avatar' => $item->avatar,
            'title' => $item->title,
            'num_posts' => $item->num_posts,
            'signature' => $item->signature,
            'registered' => Date::get($item->registered),
            'facebook' => $item->facebook,
            'twitter' => $item->twitter,
            'linkedin' => $item->linkedin,
            'skype' => $item->skype,            
        ];
    }   
}

