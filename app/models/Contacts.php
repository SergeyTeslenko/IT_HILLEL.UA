<?php

namespace App\Models;

class Contacts
{
    public function getAll(): array
    {
        return $array_contacts = [
            "phone" => "123456789",
            "phone1" => "987654321",
            "phone2" => "147852369",
            "phone3" => "963258741",

        ];
    }

}