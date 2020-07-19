<?php

namespace App\Resources;

class ForumResource extends Resource
{
    public static function map($item)
    {
        return [
            'id' => $item->id,
            'name' => parent::clean($item->forum_name),
            'forum_desc' => parent::clean($item->forum_desc),
            'cat_id' => $item->cat_id,
            'num_posts' => $item->num_posts,
            'num_topics' => $item->num_topics,
            'isParent' => ($item->om_subforums_parent_id == 0),
        ];
    }   
}

