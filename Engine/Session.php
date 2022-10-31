<?php

namespace Engine;

use Engine\Traits\Singleton;

class Session
{
    use Singleton;

    public function start(): void
    {
        session_start();

    }

    public function get($key) : mixed
    {
        if (isset($_SESSION[$key]) && $_SESSION[$key]) {
            return $_SESSION[$key];
        }
        return null;
    }

    public function put(string $key, mixed $data): void
    {
         $_SESSION[$key] = $data;
    }

}