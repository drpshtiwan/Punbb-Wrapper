<?php

namespace App\Controllers;

use App\Model\User;
use App\Resources\UserResource;

class UserController
{

    public function active()
    {    
        $users = User::orderBy('num_posts','DESC')->take(10)->get();
        responseJSON(UserResource::collection($users));
    }
   
}