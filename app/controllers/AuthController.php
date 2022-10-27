<?php

namespace App\controllers;

use App\Models\Auth;

class AuthController
{
    public function login()
    {
        $data = array_filter($_POST);
        view('auth/register', $data);


    }

    /**
     * @throws \Exception
     */
    public function register(): void
    {       $data = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = new Auth();
            $post = array_filter($_POST);
            $user->createUser($post);

            $data['message']='Пользователь успешно создан';
        }
        view('auth/register', $data);
    }
}