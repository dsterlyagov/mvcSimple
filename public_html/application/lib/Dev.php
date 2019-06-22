<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 21.06.2019
 * Time: 11:01
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);
function debug($str){
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
    exit;
}