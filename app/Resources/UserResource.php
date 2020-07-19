<?php

namespace App\Resources;

use App\Utils\Date;

class UserResource extends Resource
{
    public static function map($item)
    {
        return [
            'id' => $item->id,
            'username' => parent::clean($item->username),
            'realname' => parent::clean($item->realname),
            'avatar' => $item->avatar,
            'title' => $item->title,
            'num_posts' => $item->num_posts,
            'signature' => parent::clean($item->signature),
            'registered' => Date::get($item->registered),
            'facebook' => $item->facebook,
            'twitter' => $item->twitter,
            'linkedin' => $item->linkedin,
            'skype' => $item->skype,            
        ];
    }   
}

