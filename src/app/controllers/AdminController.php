<?php

namespace Application\App\Controllers;

use Application\Engine\Interfaces\ControllerInterface;

class AdminController implements ControllerInterface
{

    public function index()
    {
    echo "AdminController page";
    }
    public function edit()
    {
        echo "AdminEdit";
    }
}

