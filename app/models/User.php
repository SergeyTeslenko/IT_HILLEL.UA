<?php

namespace App\Models;

use Engine\Orm\Insert;
use Engine\Orm\Select;


class User
{
    public function getAll(): array
    {
          $select = new Select();
         $select->setTableName('users');
        $data = $select->execute();
        return $data->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function createUser(array $data): void
    {
        $objInsert = new Insert();
        $objInsert->setColumn(array_keys($data));
        $objInsert->setValue(array_values($data));
        $objInsert->setTableName('users');
        $objInsert->execute();
    }
}