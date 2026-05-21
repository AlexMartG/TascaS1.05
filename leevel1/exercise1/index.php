<?php

require_once 'Dog.php';
require_once 'Cat.php';

$dog = new Dog("Perrito");
$cat = new Cat("Gatito");

echo $dog->getName() . ": " . $dog->makeSound() . "\n"; 
echo "<br>";
echo $cat->getName() . ": " . $cat->makeSound() . "\n"; 

?>