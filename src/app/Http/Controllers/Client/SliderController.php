<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\SliderService;
use Illuminate\Http\Request;

class SliderController extends BaseController
{
    protected $sliderService;

    public function __construct(
        SliderService $sliderService
    ) {
        $this->sliderService = $sliderService;
    }

    public function getSliders(Request $request)
    {
        try {
            $data = $this->sliderService->getAll();
            return $this->response(
                Response::HTTP_OK,
                Response::$statusTexts[Response::HTTP_OK],
                $data
            );
        } catch (Exception $e) {
            report($e);
            return $this->response(
                Response::HTTP_INTERNAL_SERVER_ERROR,
                Response::$statusTexts[Response::HTTP_INTERNAL_SERVER_ERROR],
            );
        }
    }
}
