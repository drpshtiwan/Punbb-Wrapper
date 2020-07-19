<?php

namespace App\Resources;

use App\Model\Forum;
use App\Model\Post;
use App\Model\User;
use App\Utils\Date;

class TopicResource extends Resource
{

    public static function map($item)
    {
        return [
            'id' => $item->id,
            'subject' => parent::clean($item->subject),
            'num_replies' => $item->num_replies,
            'num_views' => $item->num_views,
            'sticky' => $item->sticky,
            'closed' => $item->closed,
            'hasNoreplies' => ($item->first_post_id == $item->last_post_id),
            'last_post' => PostResource::single(Post::find($item->last_post_id)),
            'forum' => ForumResource::single(Forum::find($item->forum_id)),
            'poster' => User::byUsernameResource($item->poster),
        ];
    }
}

