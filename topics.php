<?php

use App\Controllers\TopicController;

require __DIR__."/core/bootstrap.php";

$topic = new TopicController;



if(request()->get('id') != null) {
    $topic->show(request()->get('id'));
}else{
    $topic->index();
}

