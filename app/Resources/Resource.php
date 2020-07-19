<?php

namespace App\Resources;

use Illuminate\Pagination\LengthAwarePaginator;

interface ResourceInterface {
    public static function map($item);
}
  
abstract class Resource implements ResourceInterface
{
    public static function single($item)
    {
        return static::map($item);
    }
    
    public static function collection($items)
    {
        if($items instanceof LengthAwarePaginator) {
            return collect(json_decode(json_encode($items)))
            ->map(function($item,$key)
            {
                if($key == 'data') {
                    return collect($item)->map(function($piece) 
                    {
                       return  static::map($piece);
                    }); 
                        
                }
                return $item;
            });
        }
        
        return $items->map(function($item)
        {
            return static::map($item);
        });
    }
    public static function clean($text)
    {
        return mb_convert_encoding($text, 'UTF-8', 'UTF-8');
    }
}

