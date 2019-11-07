<?php

namespace App\Controllers;


use App\Model\Topic;
use App\Resources\TopicResource;

class TopicController
{
    public function index()
    {    
        makePagination();
        $topics = Topic::orderBy('id','DESC')->paginate(10);
        responseJSON(TopicResource::collection($topics));
    }
    
    public function show($id)
    {    
        $topic = Topic::find($id);
    
        responseJSON(TopicResource::single($topic));
    }
    
    public function update()
    {    
        
    }
    
}