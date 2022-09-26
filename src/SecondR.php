<?php

namespace App;

class SecondR extends R{
    public int $value = 300;
    public function sum(): int
    {
        return $this->value + $this->_value;
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