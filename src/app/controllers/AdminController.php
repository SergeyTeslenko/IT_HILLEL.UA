<?php

namespace Application\App\Controllers;

use Application\App\Controllers\ControllerInterface;

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

