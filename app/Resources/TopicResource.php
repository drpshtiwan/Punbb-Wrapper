<?php

namespace App\Resources;

use App\Model\Forum;
use App\Model\User;
use Carbon\Carbon;

class TopicResource 
{

    protected static function map($item)
    {
        return [
            'id' => $item->id,
            'subject' => $item->subject,
            'date' => Carbon::createFromFormat('U',$item->posted)->format('Y-m-d'),
            'poster' => UserResource::single(User::where('username',$item->poster)->first()),
            'last_poster' => UserResource::single(User::where('username',$item->last_poster)->first()),
            'num_replies' => $item->num_replies,
            'num_views' => $item->num_views,
            'num_views' => $item->num_views,
            'forum' => ForumResource::single(Forum::find($item->forum_id)),
            'sticky' => $item->sticky,
            'closed' => $item->closed,
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

