<?php

namespace App\Controllers;


use App\Model\Topic;
use App\Resources\TopicResource;

class TopicController
{
    public function index($style,$forum)
    {    
        $forum = !empty($forum) ? $forum : 'all';
        makePagination();
        $topics = Topic::where('last_post_id','!=',0);
        if($forum != 'all'){
            $topics->where('forum_id',intval($forum));
        }
        switch($style){   
            case 'noreply':
                $topics->whereColumn('first_post_id','last_post_id');
            case 'sticky':
                $topics->where('sticky',1);
        }
        switch($style){   
            case 'seen':
                $topics->orderBy('num_views','DESC');
            case 'popular':
                $topics->orderBy('num_replies','DESC');
            default:
                $topics->orderBy('last_post','DESC');
        }
        responseJSON(TopicResource::collection($topics->paginate(10)));
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