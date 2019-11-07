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
        if($id == null) return;
        $topic = Topic::find($id);
        responseJSON(TopicResource::single($topic));
    }

    public function userTopics($poster)
    {    
        if($poster == null) return;
        makePagination();
        $topics = Topic::where('poster',$poster)->orderBy('id','DESC')->paginate(20);
        responseJSON(TopicResource::collection($topics));
    }
    
    
    
}