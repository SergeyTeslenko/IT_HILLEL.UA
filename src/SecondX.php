<?php

namespace App;

class SecondX extends X{
    public int $value = 126;
    public function sum(): int
    {
        return  $this->_value + $this->value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): void
    {
        $this->value = $value;
    }
}