<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class NotFoundException extends Exception
{
    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $this->$message = $message;
        parent::__construct($message, $code, $previous);
    }

    /**
     * Report the exception.
     *
     * @return bool|null
     */
    public function report(): ?bool
    {
        return false;
    }


    public function render(): JsonResponse
    {
        return response()->json([
            "response_code" => Response::HTTP_BAD_REQUEST,
            "response_message" => $this->message,
        ], Response::HTTP_BAD_REQUEST);
    }
}
