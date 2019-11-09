<?php

namespace App\Resources;

class CategoryResource extends Resource
{
    public static function map($item)
    {
        return [
            'id' => $item->id,
            'name' => $item->cat_name,
            'forums' => ForumResource::collection($item->forums),
        ];
    }
}

