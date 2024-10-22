<?php

require_once 'Dog.php';
require_once 'Cat.php';

$dog = new Dog('Thor', 3, 4, 10);
var_dump($dog);

echo "<br>";
$dog->setLegs(6);

$dog->setHeight(20);

var_dump($dog->getHeight());

echo "<br>";
echo $dog;

echo "<br>";

$cat = new Cat('Tom', 4, 4, 5);
$cat->legs = 2;
var_dump($cat);