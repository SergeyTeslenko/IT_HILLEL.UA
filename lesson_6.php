<?php
/*1) Создать родительский (главный класс)
Класс должен содержать 2 свойства.
Каждое свойство должно иметь геттеры и сеттеры и
должен содержать абстрактную функцию возведения в степень*/

abstract class parentClass
{
    private int $numOne;
    private int $numTwo;

//set first verNumber
    public function setNumOne(int $numOne): void
    {
        $this->numOne = $numOne;
    }

    public function getNumOne(): int
    {
        return $this->numOne;
    }

    //set second verNumber
    public function setNumTwo(int $numTwo): void
    {
        $this->numTwo = $numTwo;
    }

    public function getNumTwo(): int
    {
        return $this->numTwo;
    }

    abstract public function pow();

}

class Child extends parentClass
{
    public function pow()
    {
        $this->setNumOne(2);
        $this->setNumTwo(7);
        return pow($this->getNumOne(), $this->getNumTwo());
    }
}

$nums = new Child;
var_dump($nums->pow());


/*2) Создать 3 наследника родительского класса
Каждый наследник должен содержать одно свойство
Каждое свойство должно иметь геттер и сеттер
Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
Один наследник не должен быть наследуемым*/

class A
{
    protected int $_value = 2;

    public function getValue(): int
    {
        return $this->_value;
    }

    public function setValue(int $value): void
    {
        $this->_value = $value;
    }
}


class B extends A
{

    public int $value = 10;
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
class C extends A
{

    public int $value = 10;
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
final class D extends A
{

    public int $value = 12;

    public function getValue(): int
    {
        return $this->value;
    }

    public function sum()
    {
        return $this->value + $this->_value;
    }


    public function setValue(int $value): void
    {
        $this->value = $value;
    }

}

$exmpB = new B();
var_dump($exmpB->sum());

$exmpC = new C();
var_dump($exmpC->sum());

$exmpD = new D();
var_dump($exmpD->sum());



/*3) Создать по 2 наследника от наследников первого уровня
Каждое свойство должно иметь геттер и сеттер
Наследники должны реализовать по одному методу
который выполняет одно математическое действие с данными родителя и своими данными
И по одному методу который
выполняет любое математическое действие со свойством корневого класса и своим свойством
В случае если реализован наследник класса содержащего абстрактную функцию то класс должен
содержать реализацию абстракции*/
//Мне показали очень замечательный способ. Задание находиться в index.pxp


