<?php

namespace App\Models;
use Engine\Orm\Insert;
use Engine\Orm\Select;


class Auth
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
          $objLogIn = new Insert();
          $objLogIn ->setColumn(array_keys($data));
          $objLogIn->setValue(array_values($data));
          $objLogIn->setTableName('users');
          $objLogIn->execute();
    }
}