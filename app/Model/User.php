<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model  as Eloquent;

class User extends Eloquent
{

    public function group()
    {
        return $this->belongsTo(Group::class,'group_id','g_id');
    }
}