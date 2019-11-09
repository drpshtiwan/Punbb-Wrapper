<?php

use App\Controllers\UserController;

require __DIR__."/core/bootstrap.php";

$user = new UserController;

$type = request()->get('type');

switch($type)
{
    case 'active':
        $user->active();
    
}
