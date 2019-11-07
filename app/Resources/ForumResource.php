<?php

namespace App\Resources;

use App\Model\Category;
use App\Model\Forum;
use App\Model\User;
use Carbon\Carbon;

class ForumResource 
{

    protected static function map($item)
    {
        return [
            'id' => $item->id,
            'name' => $item->forum_name,
            'forum_desc' => $item->forum_desc,
            'cat_id' => $item->cat_id,
            'num_posts' => $item->num_posts,
            'num_topics' => $item->num_topics,
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

