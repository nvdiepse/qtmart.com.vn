<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    public function about()
    {
        return view('client.about');
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function compare()
    {
        return view('client.compare');
    }

    public function wishlist()
    {
        return view('client.wishlist');
    }

    public function search()
    {
        return view('client.search_product');
    }

    public function checkout()
    {
        return view('client.check_out');
    }

    public function cart()
    {
        return view('client.cart');
    }
}
