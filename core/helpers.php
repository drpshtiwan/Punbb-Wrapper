<?php

use App\Utils\Config;
use Illuminate\Pagination\Paginator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


function config($key)
{
    return Config::getArray($key);
}

function setConfig($key,$array)
{
    return Config::set($key,$array);
}

function envi($key,$value = null)
{
    if(!empty($value))
    {
        $_ENV[$key] = $value;
    }

    return $_ENV[$key];
}



function request()
{
    $request = Request::createFromGlobals();
    return $request->query;
}

function responseJSON($data = [])
{
    $response = new JsonResponse();
    $response->setData($data);
    $response->send();
}


function makePagination()
{
    $page = (request()->get('page') != null ) ? intval(request()->get('page')) : 1;
    Paginator::currentPageResolver(function () use ($page) {
        return $page;
    });
}