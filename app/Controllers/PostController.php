<?php

namespace App\Controllers;

use App\Model\Post;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class PostController
{
    public function index(Request $request, Response $response)
    {    
        $forum = Post::paginate(25);
        $response->getBody()->write(json_encode($forum));
        return $response->withHeader('Content-Type','application/json');
    }
    
    public function show(Request $request, Response $response,$args)
    {    
        $forum = Post::find($args['id']);
        $response->getBody()->write(json_encode($forum));
        return $response->withHeader('Content-Type','application/json');
    }
    
    public function update(Request $request, Response $response,$args)
    {    
        dump($request->getQueryParams());
        die();
        $forum = Post::find($args['id']);
        $response->getBody()->write(json_encode($forum));
        return $response->withHeader('Content-Type','application/json');
    }
    
}