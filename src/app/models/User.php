<?php

namespace Application\App\Models;
use Application\Engine\Orm\Select;


class User
{
    public function getAll(): array
    {
        $select = new Select();
        $select->setTableName('users');
        $data =  $select->execute();
        return $data ->fetchAll(\PDO::FETCH_ASSOC);
    }
}