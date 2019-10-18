<?php

use App\Controllers\ForumController;

if(!function_exists('envi')) return false;

$app->get('/forums', ForumController::class);
$app->get('/forums/{id}', ForumController::class.":show");

$app->run();