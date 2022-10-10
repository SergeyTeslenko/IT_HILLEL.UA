<?php

namespace Application;
use Application\App\Controllers\ErrorController;


class Router
{
    private string $exp;
    private array $config = [];

    public function __construct()
    {
    $this ->exp = substr($_SERVER['REQUEST_URI'], 1);
//        $this->exp = explode("/", $str);
        $this->config = include_once (__DIR__) . './app/config/config.php';

    }

    public function run(): void
    {
        var_dump(array_key_exists($this->exp, $this->config));
        var_dump( $this->exp);

        if (array_key_exists($this->exp, $this->config)){
            $classPath = "Application\\App\\Controllers\\" . $this->getClassname();
        }else {
           $obj = new ErrorController();
            $this->call($this->exp, $this->getMethod());
        }

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
//        return $expmethod[1];
//        if ( empty($this->exp[1])) {
//            $methodName = 'index';
//        } else {
//            $methodName = $this->exp[1];
//        }
//
        $methodName= explode(':', $this->config[$this->exp]);
       return $methodName[1];
;
    }

    private function getClassName(): string
    {
      $exp = explode(':', $this->config[$this->exp]);
        return $exp[0];
    }
//        if (empty($this->exp[0])) {
//            $className = 'HomeController';
//        } else {
//            $className = $this->exp[0] . 'Controller';
//        }
//        return ucfirst($className);
//    }

}





