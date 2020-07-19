<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Forumperms extends Eloquent
{
    protected $table = 'forum_perms';
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }
}