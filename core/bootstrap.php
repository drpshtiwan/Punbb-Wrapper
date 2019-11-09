<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Symfony\Component\Dotenv\Dotenv;
use Slim\Factory\AppFactory;
use Slim\Middleware\ErrorMiddleware;

if (!defined('FORUM_ROOT')) define('FORUM_ROOT', __DIR__.'/../../');
if(!function_exists('_forum_remove_bad_characters')) {
    require FORUM_ROOT.'include/common.php';
}

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


// $app = AppFactory::create();
// $errorMiddleware = new ErrorMiddleware( $app->getCallableResolver(), $app->getResponseFactory(), true, false, false ); 
// $app->add($errorMiddleware);

// require __DIR__."/routes.php";
