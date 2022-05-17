<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCategory\CreateRequest;
use App\Http\Requests\Admin\ProductCategory\DeleteRequest;
use App\Http\Requests\Admin\ProductCategory\UpdateRequest;
use App\Services\ProductCategoryService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    protected $productCategoryService;
    public function __construct(
        ProductCategoryService $productCategoryService
    ) {
        $this->productCategoryService = $productCategoryService;
    }

    public function index()
    {
        $prCategories = $this->productCategoryService->getAll();

        $viewData = [
            'prCategories' => $prCategories
        ];
        return view('backend.product_category.index', $viewData);
    }

    public function create()
    {
        $data = $this->productCategoryService->getPrCategoriesSort();
        return view('backend.product_category.create', [
            'data' => $data,
        ]);
    }

    public function update()
    {
        // $data = $this->productCategoryService->getAll();
        return view('backend.product_category.create', [
            // 'data' => $data,
        ]);
    }

    public function store(CreateRequest $request)
    {
        try {
            // dd($request);
            // DB::beginTransaction();
            // $data = [

            // ];
            // $this->productCategoryService->
            // DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
        }
    }

    public function updateById(UpdateRequest $request, $id, $data)
    {
        try {
            DB::beginTransaction();
            $this->productCategoryService->updateById($id, $data);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
        }
    }

    public function deleteById(DeleteRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->productCategoryService->deleteById($id);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
        }
    }
}
