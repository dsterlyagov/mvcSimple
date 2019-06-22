<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 22.06.2019
 * Time: 15:13
 */

namespace application\core;


abstract class Controller
{
    public $route;
    public function __construct($route)
    {$this->route = $route;

    }

}