<?php

namespace Engine\Orm;
use Engine\Orm\common\Connector;
use PDOStatement;

class Select
{
    //SELECT * FROM
    protected $tableName;
    protected  $columns = '*';

    private \PDO $db;
    public function __construct()
    {
        $this->db = (new Connector())->connect();
    }
    /**
     * @return mixed
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * @param mixed $tableName
     */
    public function setTableName($tableName): void
    {
        $this->tableName = $tableName;
    }

    /**
     * @return mixed
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * @param mixed $columns
     */
    public function setColumns($columns): void
    {
        $this->columns = $columns;
    }

    public function getSQL(): string
    {
        return 'SELECT ' .$this->columns. 'FROM ' . $this->tableName;
    }



    public function execute(): bool|PDOStatement
    {

        return $this->db->query($this->getSQL());
    }

}