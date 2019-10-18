<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Symfony\Component\Dotenv\Dotenv;
use Slim\Factory\AppFactory;
use Slim\Middleware\ErrorMiddleware;

require  __DIR__.'/../vendor/autoload.php';
require __DIR__."/helpers.php";

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

/*
|--------------------------------------------------------------------------
| SetUp Slim
|--------------------------------------------------------------------------
|
*/
 

$app = AppFactory::create();
$errorMiddleware = new ErrorMiddleware( $app->getCallableResolver(), $app->getResponseFactory(), true, false, false ); 
$app->add($errorMiddleware);

require __DIR__."/routes.php";
