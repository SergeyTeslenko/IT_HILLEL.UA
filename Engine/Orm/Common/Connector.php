<?php

namespace Engine\Orm\Common;


use PDO;

class Connector
{
    private string $dsn;
    private string $username;
    private string $password;

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