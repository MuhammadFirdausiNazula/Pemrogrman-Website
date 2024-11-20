<?php

namespace app\Traits;

//untuk formating response
trait ApiResponseFormatter{
    public function apiresponse ($code = 200, $message = "success", $data = [])
    {
        //dari parameter  akan diformat menjadi format dibawah ini
        return json_encode([
            "code"=> $code,
            "message"=> $message,
            "data"=> $data
        ]);
    }
}