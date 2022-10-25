<?php

namespace App\Models;


class Page {
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


