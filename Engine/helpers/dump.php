<?php

use Engine\Session;

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
        \Engine\View::generate($view, $data);
    }
}


if (!function_exists('config')) {


    function config($key, $default = null)
    {
        $config = \Engine\Config::getInstance();
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

if (!function_exists('array_only')) {

    function array_only($array, $keys): array
    {
        return array_intersect_key($array, array_flip((array)$keys));

    }

}
if (!function_exists('session')) {

    function session($key = null): mixed
    {
        $session = Session::getInstance();
        if (!is_null($key)) {
            return $session->get($key);
        }
        /** @var $session Session */

        return $session;

    }

}
if (!function_exists('redirect')) {

    function redirect($path): void
    {
         header("Location:" . trim($path, '/'));

    }

}