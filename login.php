<?php

use App\Controllers\LoginController;

require __DIR__."/core/bootstrap.php";

$login = new LoginController;

$type = request()->get('type');

switch($type)
{
    case 'me':
        $login->me();    
    case 'links':
        $login->links();    
}
