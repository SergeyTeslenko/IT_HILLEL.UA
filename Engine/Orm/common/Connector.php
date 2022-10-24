<?php

namespace Engine\Orm\common;


use PDO;

class Connector
{
    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=' . config('database.host', '127.0.0.1') . ';dbname=' . config('database.database', 'app.php');
        $this->username = config('database.username', 'root');
        $this->password = config('database.password', null);
    }

    public function connect(): PDO
    {
        return new PDO($this->dsn, $this->username, $this->password);
    }
}