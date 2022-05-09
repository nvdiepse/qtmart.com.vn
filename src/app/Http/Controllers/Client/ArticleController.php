<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\ArticleService;
use Exception;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function findBySlug(Request $request, $slug)
    {
        try {
            $data = $this->productCategoryService->findBySlug($slug);
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
