<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\ProductService;
use App\Services\Client\SliderService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    protected $productService;
    protected $sliderService;

    public function __construct(
        ProductService $productService,
        SliderService $sliderService
    ) {
        $this->productService = $productService;
        $this->sliderService = $sliderService;
    }
    public function home()
    {
        $dealsOfTheWeek = $this->productService->getDealsOfTheWeek();
        $hotBestSellers = $this->productService->getHotBestSellers();
        $hotNewArrivals = $this->productService->getHotNewArrivals();
        $sliders = $this->sliderService->getAll();
        return view('client.home', [
            'dealsOfTheWeek' => $dealsOfTheWeek,
            'hotBestSellers' => $hotBestSellers,
            'hotNewArrivals' => $hotNewArrivals,
        ]);
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
