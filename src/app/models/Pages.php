<?php

namespace Application\App\models;


class Pages {
    public function getAll(): array
    {
        return $array_pages = [
            "page" => "auto",
            "page1" => "moto",
            "page2" => "yachts",
            "page3" => "jeeps",

        ];
    }
}


