<?php

namespace App;

class FirstR extends R{
    public int $value = 200;
    public function sum()
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