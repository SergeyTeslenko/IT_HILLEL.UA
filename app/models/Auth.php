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
        $objLogIn->setColumn(array_keys($data));
        $objLogIn->setValue(array_values($data));
        $objLogIn->setTableName('users');
        $objLogIn->execute();
    }

    public function getOne(array $data): bool|array
    {
        foreach ($data as $key => $value){
            $data[$key] = [$value];
        }

        $select = new Select();
        $select->setTableName('users');

        $data['limit'] = 1;

        $data = $select->execute($data);
        return $data->fetchAll(\PDO::FETCH_ASSOC);

    }

    public  function generate($length = 16)
    {
        $string = '';

        while (($len = strlen($string)) < $length) {
            $size = $length - $len;

            $bytes = random_bytes($size);

            $string .= substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $size);
        }

        return $string;
    }


    public function attempt(array $data): bool
    {
       $user = $this->getOne($data);
        if (empty($user)){
            return  false;
        }
        return true;
    }
}