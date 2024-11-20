<?php
namespace App\Models;

abstract class AbstractAnimal {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Abstract method: harus diimplementasikan oleh kelas turunan
    abstract public function makeSound();

    // Method umum yang bisa digunakan oleh semua subclass
    public function getInfo() {
        return "This is a " . get_class($this) . " named " . $this->name . " that is " . $this->age . " years old.";
    }
}
