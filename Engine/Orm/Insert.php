<?php

namespace Engine\Orm;

use Engine\Orm\Commo\Connector;
use PDOStatement;

class Insert
{
//INSERT INTO table_name (column1, column2, column3,...)
//VALUES (value1, value2, value3,...)
    private string $tableName;
    private array $column = [];
    private array $value = [];
    private \PDO $db;


    public function __construct()
    {
        $this->db = (new Connector())->connect();
    }


    /**
     * @return string
     */
    public function getTableName(): string
    {
        return $this->tableName;
    }

    /**
     * @param string $tableName
     */
    public function setTableName(string $tableName): void
    {
        $this->tableName = $tableName;
    }

    /**
     * @return array
     */
    public function getColumn(): array
    {
        return $this->column;
    }

    /**
     * @param array $column
     */
    public function setColumn(array $column): void
    {
        $this->column = $column;
    }

    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->value;
    }

    /**
     * @param array $value
     */
    public function setValue(array $value): void
    {
        $this->value = $value;
    }

    public function getSQL(array $fields, array $value): string
    {     $result = '';

        foreach ($value as $item) {

            if (empty($result)) {
                $result = "'" . $item . "'";
            } else {
                $result .= ",'" . $item . "'";
            }
        }
        return 'INSERT INTO ' . $this->tableName . ' (' . implode(',', $fields) . ') VALUES (' . $result . ') ';
    }

    public function execute(): bool|PDOStatement
    {

        return $this->db->query($this->getSQL($this->column, $this->value));
    }
}