<?php

namespace Application\orm\common;


class Connector
{
    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        $params = include_once __DIR__ . '/../config/params.php';
        $host = $params['host'] ?? '';
        $dbname = $params['dbname'] ?? '';
        $this->dsn = 'mysql:host=' . $host . ' ;dbname =' . $dbname;
        $this->username = $params['username'] ?? '';
        $this->password = $params['password'] ?? '';
    }

    public function connect()
    {
        return New PDO($this->dsn, $this->username, $this->password);
    }
}