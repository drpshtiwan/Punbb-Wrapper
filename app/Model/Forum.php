<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Forum extends Eloquent
{

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }



    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id','id');
    }

        
    public function perms()
    {
        return $this->hasMany(Forumperms::class);
    }

}