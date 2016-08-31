<?php
/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 30.08.2016
 * Time: 19:40
 */


require_once __DIR__ . '/autoload.php';

$ctrl = !empty($_GET['ctrl']) ? $_GET['ctrl'] : 'news';
$act = !empty($_GET['act']) ? $_GET['act'] : 'all';
$ctrlClassName = ucfirst($ctrl) . 'Controller';
try {
    $controller = new $ctrlClassName;
    $method = 'action' . ucfirst($act);
    $controller->$method();
} catch (Exception $e) {
    echo 'Ошибка: ' . $e->getMessage();
}