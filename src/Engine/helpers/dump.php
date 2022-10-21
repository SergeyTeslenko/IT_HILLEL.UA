<?php

if (!function_exists('dd')) {

    function dd()
    {
        echo "<pre>";
        array_map(function ($x) {

            var_dump($x);
        }, func_get_args());
        die;
    }
}

if (!function_exists('view')) {

    /**
     * @throws Exception
     */
    function view($view, $data = []): void
    {
         \Application\Engine\View::generate($view, $data);
    }
}


if (!function_exists('config')) {


    function config($key, $default = null)
    {
        $config = \Application\engine\Config::getInstance();
        return $config->get($key);
    }
}

if (!function_exists('dump')) {

    function dump()
    {
        echo "<pre>";

        array_map(function ($x) {
            var_dump($x);
        }, func_get_args());
    }
}