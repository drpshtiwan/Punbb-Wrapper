<?php

// require __DIR__.'/../../config.php';

if(!function_exists('setConfig')) return false;

setConfig('mysql',[
    'driver'    => 'mysql',
    'host'      => envi('DB_HOST'),
    'database'  => envi('DB_NAME'),
    'username'  => envi('DB_USER'),
    'password'  => envi('DB_PASS'),
    'charset'   => 'latin1',
    'collation' => 'latin1_general_ci',
    'prefix'    => envi('DB_PREFIX'),
]);