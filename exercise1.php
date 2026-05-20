<?php

interface AnimalSound {
    public function makeSound();
}
abstract class Animal implements AnimalSound {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
    abstract public function makeSound();
}
class Dog extends Animal {
    public function makeSound() {
        return "Guau guau!";
    }
}
class Cat extends Animal {
    public function makeSound() {
        return "Meoooow!";
    }
}
$dog = new Dog("Perrito");
$cat = new Cat("Gatito");

echo $dog->getName() . " says: " . $dog->makeSound() . "\n";
echo "<br>";
echo $cat->getName() . " says: " . $cat->makeSound()


?>