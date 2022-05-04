<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ArticleService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    protected $articleService;
    public function __construct(
        ArticleService $articleService
    ) {
        $this->articleService = $articleService;
    }

    public function getAll(Request $request)
    {
        try {
            $orderBy = request('orderBy');
            $limit = request('limit');
            return $this->articleService->getAll($orderBy, $limit);
        } catch (Exception $e) {
            report($e);
        }
    }


    public function create()
    {
        return view('backend.article.create');
    }

    public function store()
    {
        try {
            $data = [];
            DB::beginTransaction();
            $this->articleService->store($data);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
        }
    }

    public function updateById($id, Request $request)
    {
        try {
            $data = [];
            DB::beginTransaction();
            $this->articleService->updateById($id, $data);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
        }
    }

    public function index()
    {
        return view('backend.article.index');
    }
}
