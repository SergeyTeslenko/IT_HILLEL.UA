<?php

namespace Application\App\models;

class User
{
    public function getAll(): array
    {
        return $array_user = [
            "name" => "Sergey",
            "name1" => "Vasya",
            "name2" => "Kolya",
            "name3" => "Petya",

        ];
    }
}