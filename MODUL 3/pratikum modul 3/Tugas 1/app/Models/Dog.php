<?php
namespace App\Models;

use App\Traits\CanRun;

class Dog extends AbstractAnimal {
    use CanRun;

    public function makeSound() {
        return "Woof!";
    }

    // Magic Method __toString
    public function __toString() {
        return "Dog: Name: {$this->name}, Age: {$this->age}";
    }
}
