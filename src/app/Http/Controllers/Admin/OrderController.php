<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('backend.order.index');
    }

    public function detailById($id)
    {
        return view('backend.order.detail');
    }
}
