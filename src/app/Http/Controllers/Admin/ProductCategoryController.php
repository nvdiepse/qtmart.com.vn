<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\ProductCategoryService;
use App\Http\Requests\Admin\ProductCategory\CreateRequest;
use App\Http\Requests\Admin\ProductCategory\DeleteRequest;
use App\Http\Requests\Admin\ProductCategory\UpdateRequest;

class ProductCategoryController extends Controller
{
    protected $productCategoryService;
    public function __construct(
        ProductCategoryService $productCategoryService
    ) {
        $this->productCategoryService = $productCategoryService;
    }

    public function index(Request $request)
    {
        $prCategories = $this->productCategoryService->getPrCategories();

        return view('backend.product_category.index', ['prCategories' => $prCategories, 'query' => $request->query()]);
    }

    public function create()
    {
        $data = $this->productCategoryService->getPrCategoriesSort();
        return view('backend.product_category.create', [
            'data' => $data,
        ]);
    }

    public function update(UpdateRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $data = $request->except('_token',);

            $data['updated_at'] = Carbon::now();

            $this->productCategoryService->updateById($id, $data);

            DB::commit();
            return redirect()->route('product_category.index');
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
            report($e);
        }
    }

    public function store(CreateRequest $request)
    {
        $proCategory = $request->except('_token');

        try {
            DB::beginTransaction();
            $data = [
                'name' => $proCategory['name'],
                'code' => $proCategory['code'],
                'parent_id' => $proCategory['parent_id'],
                'status' => $proCategory['status'],
                'created_at' => Carbon::now(),
            ];

            $this->productCategoryService->store($data);
            DB::commit();
            return redirect()->route('product_category.index');
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

    public function active($id)
    {
        $prCategories = $this->productCategoryService->findById($id);
        $prCategories->status = !$prCategories->status;
        $prCategories->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $prCategories = $this->productCategoryService->findById($id);
        if ($prCategories) $prCategories->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $prCategories = $this->productCategoryService->findById($id);
        return view('backend.product_category.update', ['prCategories' => $prCategories]);
    }
}
