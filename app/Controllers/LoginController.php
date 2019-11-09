<?php

namespace App\Controllers;

use App\Resources\LoginResource;

class LoginController
{
    public function me()
    {    
        global $forum_user;
        responseJSON(LoginResource::single((object)$forum_user));
    }  

    public function links()
    {
        
    }
}