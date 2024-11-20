<?php
// Pastikan jalur file sudah benar
require_once __DIR__ . '/app/Models/AbstractAnimal.php';
require_once __DIR__ . '/app/Models/Dog.php';
require_once __DIR__ . '/app/Models/Cat.php';
require_once __DIR__ . '/app/Traits/CanRun.php';
require_once __DIR__ . '/app/Controllers/AnimalController.php';

use App\Controllers\AnimalController;

// Membuat objek AnimalController
$controller = new AnimalController();

// Menampilkan informasi tentang anjing
$animalData = $controller->showAnimal('dog', 'Buddy', 3);
echo $animalData['info'] . PHP_EOL;
echo "Sound: " . $animalData['sound'] . PHP_EOL;
echo $animalData['run'] . PHP_EOL;
echo $animalData['toString'] . PHP_EOL;

// Menampilkan informasi tentang kucing
$animalData = $controller->showAnimal('cat', 'Whiskers', 2);
echo $animalData['info'] . PHP_EOL;
echo "Sound: " . $animalData['sound'] . PHP_EOL;
echo $animalData['run'] . PHP_EOL;
echo $animalData['toString'] . PHP_EOL;
