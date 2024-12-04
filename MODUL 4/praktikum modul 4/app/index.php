x   <?php

header("Countent-type: application/json; charset=UTF-8");

include "Routes/ProductRoutes.php";

use app\Routes\ProductRoutes;

//MENANGKAP REQUEST METHOD
$method = $_SERVER['REQUEST_METHOD'];

//MENANGKAP REQUEST PATH
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

var_dump($path);
//PANGGIL ROUTES 
$productRoutes = new ProductRoutes();
$productRoutes->handel($method, $path);
//phpinfo();