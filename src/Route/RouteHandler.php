<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/21 0021
 * Time: 14:35
 */

namespace afracore\Route;

use League\Route\RouteCollection;

class RouteHandler extends RouteCollection
{
    public function group($prefix_map, callable $group)
    {
        $group            = new RouteGroupHandler($prefix_map['path'], $group, $this);
        $this->groups[]   = $group;
        isset($prefix_map['namespace']) && !empty($prefix_map['namespace']) ? $group->namespace = $prefix_map['namespace'] : '';

        return $group;
    }
}