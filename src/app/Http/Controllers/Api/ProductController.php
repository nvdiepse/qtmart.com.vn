<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\NotFoundException;
use App\Http\Controllers\Client\BaseController;
use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Exception;
use Symfony\Component\HttpFoundation\Response;

/**
 *
 */
class ProductController extends BaseController
{

    /**
     * @var ProductService
     */
    private $productService;

    /**
     * @param ProductService $productService
     */
    public function __construct(
        ProductService $productService
    )
    {
        $this->productService = $productService;
    }

    public function getAll($limit, $offset)
    {
        try {
            $data = $this->productService->getAll($limit, $offset);
            return $this->response(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK], $data);
        } catch (Exception $e) {
            report($e);
            return $this->response(
                Response::HTTP_INTERNAL_SERVER_ERROR,
                Response::$statusTexts[Response::HTTP_INTERNAL_SERVER_ERROR]
            );
        }
    }

    /**
     * @throws NotFoundException
     */
    public function findById($id, Request $request): JsonResponse
    {
        try {
            $id = request('id');
            $product = $this->productService->findById($id);

            return $this->response(
                Response::HTTP_OK,
                Response::$statusTexts[Response::HTTP_OK],
                $product
            );
        } catch (Exception $e) {
            report($e);
            return $this->response(
                Response::HTTP_INTERNAL_SERVER_ERROR,
                Response::$statusTexts[Response::HTTP_INTERNAL_SERVER_ERROR]
            );
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        try {
            DB::beginTransaction();
            $data = [];
            $this->productService->store($data);
            DB::commit();
            return $this->response(
                Response::HTTP_OK,
                Response::$statusTexts[Response::HTTP_OK]
            );
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return $this->response(
                Response::HTTP_INTERNAL_SERVER_ERROR,
                Response::$statusTexts[Response::HTTP_INTERNAL_SERVER_ERROR]
            );
        }
    }

    /**
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update($id, Request $request): JsonResponse
    {
        try {
            DB::beginTransaction();
            $data = [];
            $this->productService->update($id, $data);
            DB::commit();
            return $this->response(
                Response::HTTP_OK,
                Response::$statusTexts[Response::HTTP_OK]
            );
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return $this->response(
                Response::HTTP_INTERNAL_SERVER_ERROR,
                Response::$statusTexts[Response::HTTP_INTERNAL_SERVER_ERROR]
            );
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function search(Request $request): JsonResponse
    {
        try {
            $options = [];
            $data = $this->productService->search($options);
            return $this->response(
                Response::HTTP_OK,
                Response::$statusTexts[Response::HTTP_OK],
                $data
            );
        } catch (Exception $e) {
            report($e);
            return $this->response(
                Response::HTTP_INTERNAL_SERVER_ERROR,
                Response::$statusTexts[Response::HTTP_INTERNAL_SERVER_ERROR]
            );
        }
    }
}
