<?php

namespace App\Controllers;


use Engine\Interfaces\ControllerInterface;
use Exception;

class HomeController implements ControllerInterface
{

    /**
     * @throws Exception
     */
    public function index()
    {
        view('home');
    }

    public function home()
    {
        echo "i am ==> HOME <==";
    }

    public function edit()
    {
        echo "i am ==> HOME/->EDIT<- <==";
    }

}