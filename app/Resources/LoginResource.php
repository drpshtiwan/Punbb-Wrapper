<?php

namespace App\Resources;

use App\Model\User;
use App\Utils\Date;

class LoginResource extends Resource
{
    public static function map($item)
    {
        return [
            'user' => User::byUsernameResource($item->username),
            'isGuest' => $item->is_guest,
            'isAdmin' => $item->is_admmod,
        ];
    }
}

