<?php

use App\Controllers\ForumController;
use App\Controllers\PostController;
use App\Controllers\TopicController;

if(!function_exists('envi')) return false;

$app->get('/forums', ForumController::class.':index');
$app->get('/forums/{id}', ForumController::class.":show");

$app->get('/topics', TopicController::class.':index');
$app->get('/topics/{id}', TopicController::class.":show");

$app->get('/posts', PostController::class.':index');
$app->get('/posts/{id}', PostController::class.":show");

$app->run();