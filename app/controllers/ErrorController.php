<?php

namespace App\Controllers;

use Engine\Interfaces\ControllerInterface;

class ErrorController implements ControllerInterface
{
    public function index(string $message = ""){
        echo $message;
    }
}