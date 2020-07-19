<?php

namespace App\Resources;

class CategoryResource extends Resource
{
    public static function map($item)
    {
        global $forum_user;
        return [
            'id' => $item->id,
            'name' => $item->cat_name,
            'forums' => ForumResource::collection($item->filteredForums($forum_user['g_id'])->get()),
        ];
    }
}

