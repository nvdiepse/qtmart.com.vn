<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function response($code, $message, $data = [])
    {
        if ($data) {
            return response()->json([
                "response_code" => $code,
                "response_message" => $message,
                "data" => $data,
            ], $code);
        }
        return response()->json([
            "response_code" => $code,
            "response_message" => $message,
        ], $code);
    }
}
