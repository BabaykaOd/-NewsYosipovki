<?php

/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 31.08.2016
 * Time: 10:06
 */

class View
{
    protected $path;
    protected $data = [];

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    public function render($template)
    {
        foreach ($this->data as $k => $v) {
            $$k = $v;
        }
        ob_start();
        include($this->path . '/' . $template . '.php');
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }
}