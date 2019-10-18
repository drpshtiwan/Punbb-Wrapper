<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model  as Eloquent;

class Topic extends Eloquent
{
     
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
}