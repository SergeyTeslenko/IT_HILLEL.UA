<?php

namespace App;

abstract class Successor
{
    protected int $_value = 2;

    public function getValue(): int
    {
        return $this->_value;
    }
    abstract function sum(): int;

    public function setValue(int $value): void
    {
        $this->_value = $value;
    }
}
