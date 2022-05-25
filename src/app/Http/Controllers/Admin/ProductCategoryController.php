<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Carbon\Carbon;
use Illuminate\Support\Str;
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

        $viewData = [
            'prCategories' => $prCategories,
            'query' => $request->query()
        ];

        return view('backend.product_category.index', $viewData);
    }

    public function create()
    {
        $categories = $this->productCategoryService->getPrCategoriesSort();
        $viewData = [
            'categories' => $categories,
        ];
        return view('backend.product_category.create', $viewData);
    }

    public function store(CreateRequest $request)
    {
        $data = $request->except('_token', 'image');

        try {
            DB::beginTransaction();

            $data['created_at'] = Carbon::now();
            if ($request->image) {
                $image = upload_image('image');
                if ($image['code'] == 1)
                    $data['image'] = $image['name'];
            }

            $category = $this->productCategoryService->store($data);
            $category->slug = Str::slug($request->name) . '-' . $category->id;
            $category->save();

            DB::commit();
            return redirect()->route('product_category.index');
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            dd($e);
        }
    }

    public function edit($id)
    {
        $category = $this->productCategoryService->findById($id);
        $categories = $this->productCategoryService->getAll();
        $viewData = [
            'category' => $category,
            'categories' => $categories
        ];

        return view('backend.product_category.update', $viewData);
    }

    public function update(UpdateRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $data = $request->except('_token', 'image');

            $data['updated_at'] = Carbon::now();

            if ($request->image) {
                $image = upload_image('image');
                if ($image['code'] == 1)
                    $data['image'] = $image['name'];
            }

            $category = $this->productCategoryService->updateById($id, $data);
            $category->slug = Str::slug($request->name) . '-' . $category->id;
            $category->save();

            DB::commit();
            return redirect()->route('product_category.index');
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            dd($e);
        }
    }

    public function active($id)
    {
        $category = $this->productCategoryService->findById($id);
        $category->status = !$category->status;
        $category->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $this->productCategoryService->deleteById($id);
            DB::commit();

            return redirect()->back();
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
        }
    }
}
