<?php

namespace User\ComposerWork;
use App\controllers\Error;
use App\controllers\Home;

class Router
{

    function run()
    {
        $str = substr($_SERVER['REQUEST_URI'], 1);
        $exp = explode("/", $str);

        if (empty($exp[0])) {
            $className = "Admin";
        } else {
            $className = $exp[0];
        }
        $classPath = "app\controllers\\" . $className;
        var_dump($classPath);
        if (class_exists($classPath)) {
            $obj = new $classPath;
        } else
            $obj = new Error;
            $obj->index();


    }
}





