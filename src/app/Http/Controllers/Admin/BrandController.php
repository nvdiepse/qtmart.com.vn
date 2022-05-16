<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Brand\CreateRequest;
use App\Models\Brand;
use App\Services\BrandService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    protected $brandService;

    public function __construct(
        BrandService $brandService
    ) {
        $this->brandService = $brandService;
    }

    public function index()
    {
        try {
            $data = $this->brandService->getPaginate();
            return view('backend.brand.index', [
                "data" => $data
            ]);
        } catch (Exception $e) {
            report($e);
        }
    }

    public function create()
    {
        return view('backend.brand.create');
    }

    public function store(CreateRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = [
                "name" => $request->get("name"),
                "code" => $request->get("code"),
                "status" => Brand::STATUS["ACTIVE"],
            ];
            $this->brandService->store($data);
            DB::commit();
            return redirect()->route('brand.index');
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
        }
    }
}
