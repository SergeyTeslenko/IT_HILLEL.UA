<?php

namespace App\controllers;

use App\Models\Auth;
use Engine\Request;
use Exception;

class AuthController
{
    /**
     * @throws Exception
     */
    private Request $request;
    private Auth $auth;

    public function __construct()
    {
        $this->request = Request::getInstance();
        $this->auth = new Auth();
    }

    /**
     * @throws Exception
     */
    public function login(): void
    {
        $data = [];
        if (session('user')) {
            redirect('cabinet');
        }


        if ($this->request->isPost() && $this->request->isNotEmpty()) {
            if ($this->auth->attempt($this->request->only(['email', 'password']))) {
                session()->put('user', $this->auth->generate());
                $data['message'] = 'Вы в системе';

                view('cabinet/home', compact('data'));
            } else {
                $data['error'] = "Такого пользователя не существует";
                view('auth/login', $data);
            }
        }

        view('auth/login', $data);


    }


    /**
     * @throws Exception
     */
    public function register(): void
    {
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = new Auth();
            $post = array_filter($_POST);
            $user->createUser($post);

            $data['message'] = 'Пользователь успешно создан';
        }
        view('auth/register', $data);
    }
}