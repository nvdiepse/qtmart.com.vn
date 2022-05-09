<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Http\Requests\Api\Product\StoreRequest;
use App\Services\ProductService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function index(Request $request)
    {
        return view('backend.product.index');
    }

    public function create(StoreRequest $request)
    {
        return view('backend.product.create');
    }

    public function update(UpdateRequest $request, $id)
    {
        return view('backend.product.update');
    }

    public function view()
    {
        return view('backend.product.detail');
    }
}
