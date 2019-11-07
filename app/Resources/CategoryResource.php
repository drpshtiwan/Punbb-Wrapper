<?php

namespace App\Resources;

class CategoryResource 
{

    protected static function map($item)
    {
        return [
            'id' => $item->id,
            'name' => $item->cat_name,
            'forums' => ForumResource::collection($item->forums),
        ];
    }

    public static function single($item)
    {
        return self::map($item);
    }

    public static function collection($items)
    {
        return $items
        ->filter(function ($cat){
            return $cat->forums->count() > 0;
        })
        ->map(function($item)
        {
            return self::map($item);
        });
    }
    
}

