<?php

namespace Engine;

use App\Controllers\ErrorController;


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
            list($class, $method) = $this->getClassAndMethod();
            $this->call($class, $method);


        } else {
            $this->call(ErrorController::class, 'index');
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

    private function getClassAndMethod(): array
    {
        if (is_array($this->config [$this->exp])) {
            return $this->config [$this->exp];
        }
        return explode(':', $this->config [$this->exp]);


    }


}





