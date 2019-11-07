<?php

use App\Controllers\PostController;

require __DIR__."/core/bootstrap.php";

$post = new PostController;

$type = request()->get('type');

switch($type)
{
    case 'topic':
        $post->topic(request()->get('id'));
    case 'user':
        $post->userPosts(request()->get('username'));
}
