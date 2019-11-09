<?php

namespace App\Resources;

trait ResourceTrait {
    public static function single($item)
    {
        return static::map($item);
    }
    
    public static function collection($items)
    {
        return $items->map(function($item)
        {
            return static::map($item);
        });
    }
}

interface ResourceInterface {
    public static function map($item);
}
  
abstract class Resource implements ResourceInterface
{
   use ResourceTrait;
}

