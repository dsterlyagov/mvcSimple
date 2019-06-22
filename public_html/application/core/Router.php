<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 21.06.2019
 * Time: 11:29
 */
    namespace application\core;
    class Router
    {
        protected $routes = [];
        protected $params = [];

        function __construct()
        {
            $arr = require 'application/config/routes.php';
            foreach ($arr as $key => $val) {
                $this->add($key, $val);
            }
            //debug($this->routes);
        }

        public function add($route, $params)
        {
            $route = '#^' . $route . '$#';
            $this->routes[$route] = $params;

        }

        public function match()
        {
            $url = trim($_SERVER['REQUEST_URI'], '/');
            foreach ($this->routes as $route => $params) {
                if (preg_match($route, $url, $matches)) {
                    $this->params = $params;
                    return true;
                }
            }
            return false;
        }

        public function run()
        {
            if ($this->match()) {
                $controller = 'application\controllers\\' . ucfirst($this->params['controller']) . 'Controller.php';
                if (class_exists($controller)) {
                    echo 'Ok';
                } else {
                    echo 'Маршрут не найден';
                }
            }
        }
    }
