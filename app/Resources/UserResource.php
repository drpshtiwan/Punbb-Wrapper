<?php

namespace App\Resources;

use App\Model\Extension;
use App\Model\PMMessage;
use App\Utils\Date;

class UserResource extends Resource
{
    public static function map($item)
    {
        global $forum_user;
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

        // if pun_pm installed and enabled, showing numbers of new messages just for logged in users
        $pm_ext = Extension::where([['id', 'pun_pm'], ['disabled', 0]])->count();

        if ($item->id == $forum_user['id'] && $pm_ext) {
            $user['num_new_messages'] = PMMessage::where([['read_at', 0], ['receiver_id', $item->id]])->count();
        }

        return $user;
    }
}
