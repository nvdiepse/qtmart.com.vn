<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\ProductService;
use App\Services\Client\SliderService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Meta;

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
        Meta::set('og:image', '');
        Meta::set('og:image', '');


        Meta::set('title', 'QTMart - Hệ thống điện máy thông minh');
        Meta::set('og:site', 'Diepnv');
        Meta::set('og:url', 'http://localhost:8000');
        // Meta::set('title', 'Diepnv');
        // Meta::set('description', 'This is my home. Enjoy!');
        // Meta::set('image', asset('images/home-logo.png'));
        // Meta::set('og:image', asset('images/home-logo.png'));
        // Meta::set('site_name', 'site name');
        // Meta::set('url', 'url');
        // Meta::set('url', 'url');

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
