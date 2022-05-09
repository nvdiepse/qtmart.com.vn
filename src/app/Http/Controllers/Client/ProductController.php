<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\ProductService;
use Exception;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    protected $productService;

    public function __construct(
        ProductService $productService
    ) {
        $this->productService = $productService;
    }

    public function getDealsOfTheWeek()
    {
        try {
            $data = $this->productService->getDealsOfTheWeek();
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

    public function getHotBestSellers()
    {
        try {
            $data = $this->productService->getHotBestSellers();
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

    public function getHotNewArrivals()
    {
        try {
            $data = $this->productService->getHotNewArrivals();
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

    public function getBySlug(Request $request, $slug)
    {
        try {
            $data = $this->productService->findBySlug($slug);
            if (!$data) {
                return $this->response(
                    Response::HTTP_INTERNAL_SERVER_ERROR,
                    "Not found: " . $slug,
                );
            }
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
