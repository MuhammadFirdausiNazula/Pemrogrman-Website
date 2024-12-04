<?php

namespace app\Controller;

include (__DIR__."/../Traits/ApiResponseFormatter.php");
include (__DIR__."/../Models/Product.php");

use app\Models\Product;
use app\Traits\ApiResponseFormatter;

class ProductController {
    use ApiResponseFormatter;
    public function index(){
        //definisikan objek model yang sudah dibuat
        $productModel = new Product();
        $response = $productModel->findAll();
        return $this->apiresponse(200 , "success", $response);
    }
    public function getById($id){
        $productModel = new Product();
        $response = $productModel->findById($id);
        return $this->apiresponse(200 ,"success", $response);
    }
    public function insert(){
        //tangkap input json
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);
        //validasi input tidak falid
        if(json_last_error()){
            return $this->apiresponse(400 , "error invalid input", null);
        }
        $productModel = new Product();
        $response = $productModel->create([
            "product_name" => $inputData['product_name']
        ]);
        return $this->apiresponse(200 ,'success', $response);
    }

    public function update($id) {
        $jsonInput = file_get_contents("php://input");
        $inputData = json_decode($jsonInput, true);
        if (json_last_error()) {
            return $this->apiResponse(400, "Error invalid input", null);
        }

        $productModel = new Product();
        $response = $productModel->update([
            "product_name" => $inputData["product_name"]
        ], $id);

        return $this->apiResponse(200, "success", $response);
    }


    public function delete($id){
        $productModel = new Product();
        $response = $productModel->delete($id);

        return $this->apiresponse(200 ,'success', $response);
    }
}