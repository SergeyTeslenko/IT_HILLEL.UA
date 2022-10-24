<?php

use Engine\Router;

require "./vendor/autoload.php";



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
$config =  \Engine\Config::getInstance();
$config->set($items);

$way = new Router;


$way->run();

//var_dump($_SERVER['REQUEST_URI']);
//$x = explode("/", $_SERVER['REQUEST_URI']);
