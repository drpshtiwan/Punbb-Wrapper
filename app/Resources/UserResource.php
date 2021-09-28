<?php

namespace App\Resources;

use App\Model\PMMessage;
use App\Utils\Date;

class UserResource extends Resource
{
    public static function map($item)
    {
        $user = [
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

        // if (pun_pm_messages) table doesn't exist skip this...
        try {
            $user['new_messages'] = PMMessage::where([['read_at', "0"], ['receiver_id', $item->id]])->count() ? true : false;
        } catch (\Throwable $th) {
            // throw $th;
        }

        return $user;
    }
}
