<?php

namespace App\Http\Requests\Api;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class BaseRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        $arr = [];
        $errors = json_decode($validator->errors());
        foreach ($errors as $field) {
            foreach ($field as $item) {
                array_push($arr, $item);
            }
        }
        throw new HttpResponseException(response()->json(
            [
                "response_code" => Response::HTTP_BAD_REQUEST,
                "response_message" => $arr
            ],
            Response::HTTP_BAD_REQUEST
        ));
    }
}
