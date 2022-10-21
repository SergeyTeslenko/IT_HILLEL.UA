<?php

namespace Application\App\Controllers;

use Application\Engine\Interfaces\ControllerInterface;

class ErrorController implements ControllerInterface
{
    public function index(string $message = ""){
        echo $message;
    }
}