<?php

namespace Application\App\Controllers;
use Application\App\View;
use Application\App\models\Pages;

class HomeController implements ControllerInterface
{

    public function index()
    {
        $obj = new Pages();
        $path = 'view1';
        $data['people'] =  $obj->getAll();
        \View::generate($path,$data);

    }

    public function edit()
    {
        echo "i am ==> HOME/->EDIT<- <==";
    }

}