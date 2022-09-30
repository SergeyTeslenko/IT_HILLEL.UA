<?php

use User\ComposerWork\Router;
require "./vendor/autoload.php";

$way = new Router;

$way->run();

//var_dump($_SERVER['REQUEST_URI']);
//$x = explode("/", $_SERVER['REQUEST_URI']);
