<?php

namespace app\Routes;

include (__DIR__."/../Controller/ProductController.php");

use app\Controller\ProductController;

class ProductRoutes{
    public function handel($method, $path){
        //jika request method  get dan path  sama dengan  '/api/product'
        var_dump($path);
        if($method == "GET" && $path == '/praktikum_modul_4/app/api/product'){
            $controller  = new ProductController();
            echo $controller->index();
        }
        //jika request method put dan path sama dengan '/app/product'
        if ($method == "GET" && strpos($path,"/praktikum_modul_4/app/api/product") == 0){
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) -1];

            $controller = new ProductController();
            echo $controller->getById($id); 
        }
        //jika request method put dan path sama dengan '/app/product'
        if ($method == "POST" && $path == "/praktikum_modul_4/app/api/product"){
            $controller  = new ProductController();
            echo $controller->insert(); 
        }

        // JIKA REQUEST METHOD PUT DAN PATH SAMA DENGAN '/api/product/{id}'
        if ($method == "PUT" && strpos($path, "/praktikum_modul_4/app/api/product/") === 0) {
            $pathParts = explode("/", $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->update($id);
            return;
        }
        //jika request method put dan path sama dengan '/app/product'
        if ($method == 'DELETE' && strpos($path,"/praktikum_modul_4/app/api/product/") == 0){
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) -1];

            $controller = new ProductController();
            echo $controller->delete($id);        
        }
    }
}