<?php

namespace Application\App\Controllers;

use Application\App\Controllers\ControllerInterface;

class HomeController implements ControllerInterface
{
    public function index()
    {
        echo "i am ==> HOME <==";
    }

}