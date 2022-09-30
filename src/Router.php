<?php

namespace User\ComposerWork;
use App\Controllers\Error;


class Router
{
    public $age;

    public function setValue($name)
    {
        $this->age = $name;
    }

    function run()
    {
        $str = substr($_SERVER['REQUEST_URI'], 1);
        $exp = explode("/", $str);

        if (empty($exp[0])) {
            $className = "Admin";
        } else {
            $className = $exp[0];
        }
        $classPath = "App\Controllers\\" . $className;
//       var_dump($classPath);
        if(class_exists($classPath)) {
            $obj = new $classPath;
            $obj->index();
        }
        else
        {
            $obj = new Error;
            $obj->index();
        }

    }
}





