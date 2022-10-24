<?php

namespace App\Controllers;


use Engine\Interfaces\ControllerInterface;

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

