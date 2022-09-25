<?php

namespace App;

class R extends Successor
{

    public int $value = 10;
    public function sum() : int
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