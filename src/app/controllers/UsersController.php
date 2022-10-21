<?php

namespace Application\App\Controllers;

use Application\App\Models\User;
use Application\Engine\Interfaces\ControllerInterface;
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
        echo "i am ==> Use<==";
    }
}