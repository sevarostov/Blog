<?php

/**
 * Created by PhpStorm.
 * User: big
 * Date: 02.07.2018
 * Time: 14:26
 */
class Error
{
    static function ErrorPage404()
    {
        require_once(ROOT . '/views/404/index.php');
        return true;

    }
}