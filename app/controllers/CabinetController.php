<?php

namespace App\controllers;

class CabinetController
{
    public function index()
    {
        if (!session('user')) {
            return header('Location: /login');
        }

        view('cabinet/home', []);
    }

}