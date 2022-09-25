<?php

namespace App;

class FirstX extends X{
    public int $val = 125;
    public function sum() : int
    {
        return  $this->_value + $this->val;
    }

    public function getValue(): int
    {
        return $this->val;
    }

    public function setValue(int $value): void
    {
        $this->val=$value;
    }
}