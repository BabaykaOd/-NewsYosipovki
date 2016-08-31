<?php
/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 30.08.2016
 * Time: 19:42
 * @param $class
 * @return bool
 */

function __autoload($class)
{
    $paths = [
        __DIR__ . '/classes',
        __DIR__ . '/controllers',
        __DIR__ . '/models',
        __DIR__ . '/config',
        __DIR__ . '/views/news',
        __DIR__ . '/views'
    ];

    foreach ($paths as $path)
    {
        $fileName = $path . '/' . $class . '.php';
        if (file_exists($fileName))
        {
            require_once $fileName;
            return true;
        }
    }

    return false;
}