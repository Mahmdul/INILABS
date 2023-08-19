<?php

abstract class Animal{
    abstract function func();
}

class Dog extends Animal{
    function func(){
        echo "Bark! Bark!";
    }
}

class Cat extends Animal{
    function func(){
        echo "Meow! Meow!";
    }
}

$obj = new Cat();
$obj->func();

echo PHP_EOL;

$obj = new Dog();
$obj->func();


?>