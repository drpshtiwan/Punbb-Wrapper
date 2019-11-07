<?php

use App\Controllers\TopicController;

require __DIR__."/core/bootstrap.php";

$topic = new TopicController;

$type = request()->get('type');

switch($type)
{
    case 'list':
        $topic->index();
    case 'show':
        $topic->show(request()->get('id'));
    case 'user':
        $topic->userTopics(request()->get('username'));
}
