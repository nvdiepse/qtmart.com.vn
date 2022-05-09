<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\ProductCategoryService;
use Exception;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    protected $productCategoryService;

    public function __construct(
        ProductCategoryService $productCategoryService
    ) {
        $this->productCategoryService = $productCategoryService;
    }

    public function findAll(Request $request)
    {
        try {
            $data = $this->productCategoryService->getAll();
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
