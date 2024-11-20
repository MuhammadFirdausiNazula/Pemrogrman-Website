<?php
namespace App\Models;

use App\Traits\CanRun;

class Cat extends AbstractAnimal {
    use CanRun;

    public function makeSound() {
        return "Meow!";
    }

    // Magic Method __toString
    public function __toString() {
        return "Cat: Name: {$this->name}, Age: {$this->age}";
    }
}
