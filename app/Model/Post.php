<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}