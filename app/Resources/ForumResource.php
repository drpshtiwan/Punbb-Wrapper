<?php

namespace App\Resources;

class ForumResource extends Resource
{
    public static function map($item)
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
}

