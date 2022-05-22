<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\ProductService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Product\StoreRequest;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Services\ProductCategoryService;

class ProductController extends Controller
{
    protected $productService;
    protected $productCategoryService;

    public function __construct(ProductService $productService, ProductCategoryService $productCategoryService)
    {
        $this->productService = $productService;
        $this->productCategoryService = $productCategoryService;
    }
    public function index(Request $request)
    {
        $products = $this->productService->getProduct();

        return view('backend.product.index', ['products' => $products, 'query' => $request->query()]);
    }

    public function create()
    {
        $proCategories = $this->productCategoryService->getAll();
        return view('backend.product.create', ['proCategories' => $proCategories]);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->except('_token', 'image');

        try {
            DB::beginTransaction();
            $data['slug'] = Str::slug($data['name']);
            $data['brand_id'] = 1;
            $data['created_at'] = Carbon::now();


            if ($request->image) {
                $image = upload_image('image');
                if ($image['code'] == 1)
                    $data['image'] = $image['name'];
            }

            $this->productService->store($data);

            DB::commit();
            return redirect()->route('product.index');
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
        }
    }

    public function update(UpdateRequest $request, $id)
    {
        // dd($request->all());
        try {
            DB::beginTransaction();
            $data = $request->except('_token', 'file');

            $data['slug']  = Str::slug($request->name);
            $data['updated_at'] = Carbon::now();

            if ($request->image) {
                $image = upload_image('image');
                if ($image['code'] == 1)
                    $data['image'] = $image['name'];
            }

            $this->productService->update($id, $data);

            DB::commit();
            return redirect()->route('product.index');
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
            report($e);
        }
    }

    public function view()
    {
        return view('backend.product.detail');
    }

    public function edit($id)
    {
        $product = $this->productService->findById($id);
        $proCategories = $this->productCategoryService->getAll();
        return view('backend.product.update', ['product' => $product, 'proCategories' => $proCategories]);
    }

    public function active($id)
    {
        $product = $this->productService->findById($id);
        $product->status = !$product->status;
        $product->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $product = $this->productService->findById($id);
        if ($product) $product->delete();

        return redirect()->back();
    }
}
