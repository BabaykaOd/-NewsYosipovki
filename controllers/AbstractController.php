<?php

/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 31.08.2016
 * Time: 10:09
 */
abstract class AbstractController
{
    protected function render($template, $data)
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        require $this->getTemplatePath() . '/' . $template . '.php';
    }
}