<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/21 0021
 * Time: 15:29
 */

namespace afracore\Route;


use League\Route\RouteGroup;

class RouteGroupHandler extends RouteGroup
{
    public $namespace = 'app\Http\Controllers';

    public function maps($method, $path, $handler)
    {
        if (is_string($handler)){
            list($controller, $function) = explode('::' ,$handler);
            $handler = $this->namespace . '\\' . $handler;
        }
        $this->map($method, $path, $handler);
    }
}