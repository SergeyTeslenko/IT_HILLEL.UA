<?php

namespace Engine\Orm;

use PDOStatement;

class Delete
{
//DELETE FROM TABLE WHERE condition

    private string $tableName;

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
    public function getSQL($data): string
    {
        $limit = "";
        if (!empty($data)) {
            if (isset($data['limit'])) {
                $limit = " LIMIT " . (int)$data['limit'];
                unset($data['limit']);
            }
        }

        return 'DELETE' . ' FROM ' . $this->tableName;
    }


    public function execute($data = []): bool|PDOStatement
    {
        return $this->db->query($this->getSQL($data));
    }
}