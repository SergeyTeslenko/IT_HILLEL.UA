<?php

namespace Engine\Orm;


use Engine\Orm\Common\Connector;
use PDOStatement;

class Select
{
    //SELECT * FROM
    protected $tableName;
    protected $columns = '*';

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

    public $data = [
        'email' => ['vlasca@cds.cds', '>'],
        'password' => ['cdscds', '='],
        'limit' => 24
    ];

    private function buildWhere($data = []): string
    {
        $sql = "";
        $and = " AND ";
        if (empty($data)) {
            return $sql;
        }
        if (count(array_keys($data)) > 1) {
            $step = 1;
            foreach ($data as $key => $value) {

                $operator = isset($value[1]) ? $value[1] : "=";
                $value = $value[0];
                if ($step === 1) {
                    $sql = "WHERE `" . $key . "` " . $operator . " " . '"' . $value . '"';
                } else {
                    $sql .= $and . "`" . $key . "` " . $operator . " " . '"' . $value . '"';
                }

                $step += 1;
            }
        } else {
            $key = array_key_first($data);

            $operator = isset($data[1]) ? $data[1] : "=";
            $sql = "WHERE `" . $key . "` " . $operator . '"' . $data[$key] . '"';
        }

        return $sql;

    }

    public function getSQL($data): string
    {
        $limit = "";
        if (!empty($data)) {
            if (isset($data['limit'])) {
                $limit = " LIMIT " . (int)$data['limit'];
                unset($data['limit']);
            }
        }

        return 'SELECT ' . $this->columns . ' FROM ' . $this->tableName . ' ' . trim($this->buildWhere($data)) . $limit;
    }


    public function execute($data = []): bool|PDOStatement
    {
        return $this->db->query($this->getSQL($data));
    }

}