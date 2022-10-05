<?php

namespace Application;

use Application\App\Controllers\ErrorController;


class Router
{
    private array $exp = [];


    public function __construct()
    {
        $str = substr($_SERVER['REQUEST_URI'], 1);
        $this->exp = explode("/", $str);

    }

    public function run(): void
    {
        $classPath = "Application\\App\\Controllers\\" . $this->getClassname();
        $this->call($classPath, $this->getMethod());
    }


    private function call($controller, $method): void
    {
        if (method_exists($controller, $method) && class_exists($controller)){
            call_user_func_array([new $controller, $method], []);
            exit();
        }
        call_user_func_array([new ErrorController, 'index'], ["Method {" . $method . "} does not exists in " . $controller]);
    }

    private function getMethod(): string|null
    {

        if ( empty($this->exp[1])) {
            $methodName = 'index';
        } else {
            $methodName = $this->exp[1];
        }

        return $methodName;
    }

    private function getClassName(): string
    {
        if (empty($this->exp[0])) {
            $className = 'HomeController';
        } else {
            $className = $this->exp[0] . 'Controller';
        }
        return ucfirst($className);
    }
}





