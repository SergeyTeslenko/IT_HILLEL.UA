<?php

use Engine\Config;
use Engine\Request;
use Engine\Router;

require "./vendor/autoload.php";
$session= \Engine\Session::getInstance();
$session->start();




 function makelink($target, $link)
{
    if (! PHP_OS_FAMILY === 'Windows') {
        return symlink($target, $link);
    }

    $mode = is_dir($target) ? 'J' : 'H';

    exec("mklink /{$mode} ".escapeshellarg($link).' '.escapeshellarg($target));
}

//makelink(__DIR__ . '/src/assets', 'assets');

$items = [];
$path = __DIR__ . "/config/";
foreach (array_diff(scandir($path), array('..', '.')) as $item) {
    $items[pathinfo($item, PATHINFO_FILENAME)] = require_once $path . $item;
}
$config =  Config::getInstance();
$request =  Request::getInstance();
$config->set($items);

$way = new Router;
$way->run();



