<?php

namespace App\Resources;

use App\Utils\Date;

class UserResource 
{

    protected static function map($item)
    {
        return [
            'id' => $item->id,
            'username' => $item->username,
            'realname' => $item->realname,
            'title' => $item->title,
            'signature' => $item->signature,
            'registered' => Date::get($item->registered),
            'facebook' => $item->facebook,
            'twitter' => $item->twitter,
            'linkedin' => $item->linkedin,
            'skype' => $item->skype,
            
        ];
    }

    public static function single($item)
    {
        return self::map($item);
    }

    public static function collection($items)
    {
        return $items->map(function($item)
        {
            return self::map($item);
        });
    }
    
}

