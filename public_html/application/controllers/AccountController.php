<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 22.06.2019
 * Time: 14:10
 */

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function loginAction(){
        echo 'Страница входа';
    }
    public function registerAction(){
        echo 'Страница регистрации';
        var_dump($this->route);
    }

}