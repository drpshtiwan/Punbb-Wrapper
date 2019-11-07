<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Category extends Eloquent
{
    
    public function forums()
    {
        return $this->hasMany(Forum::class,'cat_id','id');
    }

}