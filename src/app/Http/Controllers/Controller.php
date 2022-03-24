<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function response($code, $message, $data = []): JsonResponse
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
