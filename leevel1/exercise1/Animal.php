<?php 

require_once 'AnimalSound.php';

abstract class Animal implements AnimalSound {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}