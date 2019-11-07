<?php

namespace App\Controllers;

use App\Model\Post;
use App\Model\Topic;
use App\Resources\PostResource;

class PostController
{

    public function topic($id)
    {    
        if($id == null) return;
        makePagination();
        $posts = Topic::find($id)->posts()->paginate(20);
        responseJSON(PostResource::collection($posts));
    }

    public function userPosts($poster)
    {    
        if($poster == null) return;
        makePagination();
        $posts = Post::where('poster',$poster)->orderBy('posted','DESC')->paginate(20);
        responseJSON(PostResource::collection($posts));
    }
    
    
    
}