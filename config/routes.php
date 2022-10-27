<?php
return [
    "" => [\App\Controllers\HomeController::class, 'index'],
    "home" => "HomeController:index",
    "edit" => "HomeController:edit", // имя класса=> метод
    "home/edit" => "HomeController:edit",
    "admin" => "AdminController:index",
    "admin/home" => "AdminController:index",
    "admin/home/edit" => "AdminController:edit",
    "user" => "UsersController:index",
    "user/edit" => [\App\Controllers\UsersController::class, 'edit'],
    "login" => [\App\Controllers\AuthController::class,'login'],
    "register" => [\App\Controllers\AuthController::class, 'register'],


];