<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', "Client\SiteController@home");
Route::get('/about', "Client\SiteController@about");
Route::get('/contact.html', "Client\SiteController@contact");
Route::get('/compare', "Client\SiteController@compare");
Route::get('/wishlist', "Client\SiteController@wishlist");
Route::get('/search', "Client\SiteController@search");
Route::get('/checkout', "Client\SiteController@checkout");
Route::get('/cart', "Client\SiteController@cart");


Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'product'], function () {
        Route::get('/create', 'Admin\ProductController@create');
        Route::get('/', 'Admin\ProductController@index');
        Route::get('/detail', 'Admin\ProductController@index');

        Route::get('/get-data', 'Api\ProductController@getAll');
    });

    Route::group(['prefix' => 'product-category'], function () {
        Route::get('/', 'Admin\ProductCategoryController@index');
        Route::get('/create', 'Admin\ProductCategoryController@create');
        Route::post('/store', 'Admin\ProductCategoryController@store')->name("product_category.create");
    });

    Route::group(['prefix' => 'brand'], function () {
        Route::get('/', 'Admin\BrandController@index')->name("brand.index");
        Route::get('/create', 'Admin\BrandController@create');
        Route::post('/store', 'Admin\BrandController@store')->name("brand.create");
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'Admin\ArticleController@index');
        Route::get('/create', 'Admin\ArticleController@create');
    });

    Route::group(['prefix' => 'event'], function () {
    });

    Route::group(['prefix' => 'marketing'], function () {
    });

    Route::group(['prefix' => 'order'], function () {
        Route::get('/', 'Admin\OrderController@index');
        Route::get('/create', 'Admin\OrderController@create');
        Route::get('/store', 'Admin\OrderController@store');
        Route::get('/detail/{id}', 'Admin\OrderController@detailById');
    });

    Route::group(['prefix' => 'report'], function () {
    });

    Route::get('ckeditor', 'Admin\CkeditorController@index');
    Route::post('ckeditor/upload', 'Admin\CkeditorController@upload')->name('ckeditor.upload');
});
