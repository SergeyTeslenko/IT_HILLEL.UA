<?php

namespace App;

class X extends Successor
{
    public int $_val = 10;
    public function sum(): int
    {
        return  $this->_value + $this->_val ;
    }

    public function getValue(): int
    {
        return $this->_value;
    }

    public function setValue(int $value): void
    {
        $this->_value = $value;
    }

}
