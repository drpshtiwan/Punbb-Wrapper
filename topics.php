<?php

use App\Controllers\TopicController;

require __DIR__."/core/bootstrap.php";

$topic = new TopicController;

$type = request()->get('type');
$style = request()->get('style'); 
$forum = request()->get('forum'); 

switch($type)
{
    case 'list':
        $topic->index($style,$forum);
    case 'show':
        $topic->show(request()->get('id'));
    case 'user':
        $topic->userTopics(request()->get('username'));
    default:
        return ;
}
