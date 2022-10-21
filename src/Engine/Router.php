<?php

namespace Application\Engine;

use Application\App\Controllers\ErrorController;


class Router
{
    private string $exp;
    private array $config = [];

    public function __construct()
    {
        $this->exp = substr($_SERVER['REQUEST_URI'], 1);
//        $this->exp = explode("/", $str);
        $this->config = config('routes');


    }

    public function run(): void
    {


        if (array_key_exists($this->exp, $this->config)) {
            $classPath = config('path.namespace'). $this->getClassname();
            $this->call($classPath, $this->getMethod());


        } else {
            $obj = new ErrorController();
            $this->call($this->exp, $this->getMethod());
        }

    }


    private function call($controller, $method): void
    {
        if (method_exists($controller, $method) && class_exists($controller)) {
            call_user_func_array([new $controller, $method], []);
            exit();
        }
        call_user_func_array([new ErrorController, 'index'], ["Method {" . $method . "} does not exists in " . $controller]);
    }

    private function getMethod(): string|null
    {
        $methodName = explode(':', $this->config [$this->exp]);
        return $methodName[1];
//        if ( empty($this->exp[1])) {
//            $methodName = 'index';
//        } else {
//            $methodName = $this->exp[1];
//        }

    }

    private function getClassName(): string
    {
//        if (empty($this->exp[0])) {
//            $className = 'HomeController';
//        } else {
//            $className = $this->exp[0] . 'Controller';
//        }
//        return ucfirst($className);
//    }
        $exp = explode(':', $this->config[$this->exp]);
        return $exp[0];
    }


}





