<?php

namespace App\Controllers;

use App\Models\User;
use Engine\Interfaces\ControllerInterface;
use Exception;

class UsersController implements ControllerInterface
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $users = new User();
        $data = [];
        $data['people'] = $users->getAll();
        view('user', $data);
    }

    public function home()
    {
        echo "i am ==> HOME <==";
    }

    public function edit()
    {

       $result =  array_filter($_POST);
        var_dump($result);
        if (!empty($result)){
            $users = new User();
            $users->createUser($result);
        }

        $data = [];
        view('insert', $data);

    }
}