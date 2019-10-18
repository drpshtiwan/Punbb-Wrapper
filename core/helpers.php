<?php

use App\Utils\Config;

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
