<?php

namespace Application\App\Controllers;

use Application\App\Controllers\ControllerInterface;

class ErrorController implements ControllerInterface
{
    public function index(string $message = ""){
        echo $message;
    }
}