<?php

namespace App\Resources;

use App\Model\User;
use App\Utils\Date;

class PostResource 
{

    protected static function map($item)
    {
        return [
            'id' => $item->id,
            'poster' => User::byUsernameResource($item->poster),
            'message' => $item->message,
            'posted' =>  Date::get($item->posted),
            'edited' => ($item->edited != null ) ? Date::get($item->edited): null,
            'edited_by' => ($item->edited != null ) ? $item->edited_by : null,
            'topic' => TopicResource::single($item->topic),
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

