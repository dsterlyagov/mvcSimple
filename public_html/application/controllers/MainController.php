<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 22.06.2019
 * Time: 15:55
 */

namespace application\controllers;
use application\core\Controller;

class MainController extends Controller
{
    public function indexAction(){
        echo 'Главная страница';
    }

}