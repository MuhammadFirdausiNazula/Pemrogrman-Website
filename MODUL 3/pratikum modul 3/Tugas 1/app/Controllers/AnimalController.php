<?php
namespace App\Controllers;

use App\Models\Dog;
use App\Models\Cat;

class AnimalController {
    public function showAnimal($type, $name, $age) {
        switch ($type) {
            case 'dog':
                $animal = new Dog($name, $age);
                break;
            case 'cat':
                $animal = new Cat($name, $age);
                break;
            default:
                return "Animal type not recognized.";
        }

        return [
            'info' => $animal->getInfo(),
            'sound' => $animal->makeSound(),
            'run' => $animal->run(),
            'toString' => $animal->__toString(),
        ];
    }
}
