<?php

namespace App\Controllers;

use App\Model\Forum;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ForumController
{
    public function index(Request $request, Response $response)
    {    
        $forum = Forum::all();
        $response->getBody()->write(json_encode($forum));
        return $response->withHeader('Content-Type','application/json');
    }
    
    public function show(Request $request, Response $response,$args)
    {    
        $forum = Forum::find($args['id']);
        $response->getBody()->write(json_encode($forum));
        return $response->withHeader('Content-Type','application/json');
    }
}