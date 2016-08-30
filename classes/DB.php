<?php

/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 30.08.2016
 * Time: 20:11
 */
class DB
{
    public function __construct($name_table)
    {
        mysql_connect('localhost', 'NewsYosipovki', '');
        mysql_select_db($name_table);
    }

    public function query($sql)
    {
        $res = mysql_query($sql);

        if(false == $res)
        {
            return false;
        }

        $ret = [];

        while ($row = mysql_fetch_object($res, $class = "stdObject"))
        {
            $ret[] = $row;
        }

        return $ret;
    }
}