<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CustomerService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(
        CustomerService $customerService
    ) {
        $this->customerService = $customerService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.customer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = [
                "code" => request("code"),
                "full_name" => request("full_name"),
                "cell_phone" => request("cell_phone"),
                "address" => request("address"),
                "email" => request("email"),
            ];
            $this->customerService->store($data);
            DB::commit();
            return view('backend.customer.index')->with("success", "Tạo mới khách hàng thành công");
        } catch (Exception $e) {
            report($e);
            DB::rollBack();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $data = [];
            $this->customerService->update($id, $data);
            DB::commit();
            return;
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $this->customerService->delete($id);
            DB::commit();
        } catch (Exception $e) {
            report($e);
            DB::rollBack();
        }
    }
}
