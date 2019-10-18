<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Group extends Eloquent
{
    protected $primaryKey = 'g_id';
    
    public function users()
    {
        return $this->hasMany(User::class,'group_id','g_id');
    }

}