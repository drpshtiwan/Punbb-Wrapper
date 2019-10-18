<?php

require  __DIR__.'/../vendor/autoload.php';
require __DIR__."/../helpers/functions.php";


use Illuminate\Database\Capsule\Manager as Capsule;
use Symfony\Component\Dotenv\Dotenv;


/*
|--------------------------------------------------------------------------
| SetUp DotEnv
|--------------------------------------------------------------------------
|
*/

$dotenv = new Dotenv();
$dotenv->load(__DIR__."/../.env");

/*
|--------------------------------------------------------------------------
| SetUp Database
|--------------------------------------------------------------------------
|
*/
require __DIR__."/../config/db.php";

$capsule = new Capsule;
$capsule->addConnection(config('mysql'));
$capsule->setAsGlobal();
$capsule->bootEloquent();
