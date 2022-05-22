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
        Route::get('/', 'Admin\ProductController@index')->name('product.index');
        Route::get('/create', 'Admin\ProductController@create')->name('product.create');
        Route::post('/store', 'Admin\ProductController@store')->name('product.store');
        Route::get('/detail', 'Admin\ProductController@index');

        Route::get('/active/{id}', 'Admin\ProductController@active')->name('product.active');
        Route::get('/delete/{id}', 'Admin\ProductController@delete')->name('product.delete');

        Route::get('update/{id}', 'Admin\ProductController@edit')->name('product.update');
        Route::post('update/{id}', 'Admin\ProductController@update');

        Route::get('/get-data', 'Api\ProductController@getAll');
    });

    Route::group(['prefix' => 'product-category'], function () {
        Route::get('/', 'Admin\ProductCategoryController@index')->name('product_category.index');
        Route::get('/create', 'Admin\ProductCategoryController@create')->name('product_category.create');
        Route::post('/store', 'Admin\ProductCategoryController@store')->name("product_category.store");
        Route::get('/active/{id}', 'Admin\ProductCategoryController@active')->name('product_category.active');
        Route::get('/delete/{id}', 'Admin\ProductCategoryController@delete')->name('product_category.delete');

        Route::get('update/{id}', 'Admin\ProductCategoryController@edit')->name('product_category.update');
        Route::post('update/{id}', 'Admin\ProductCategoryController@update');
    });

    Route::group(['prefix' => 'menu'], function () {
        Route::get('/', 'Admin\MenuController@index')->name('menu.index');
        Route::get('/create', 'Admin\MenuController@create')->name('menu.create');
        Route::post('/store', 'Admin\MenuController@store')->name("menu.store");

        Route::get('/active/{id}', 'Admin\MenuController@active')->name('menu.active');
        Route::get('/delete/{id}', 'Admin\MenuController@delete')->name('menu.delete');

        Route::get('update/{id}', 'Admin\MenuController@edit')->name('menu.update');
        Route::post('update/{id}', 'Admin\MenuController@update');
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'Admin\ArticleController@index')->name('blog.index');;
        Route::get('/create', 'Admin\ArticleController@create')->name('blog.create');
        Route::post('/store', 'Admin\ArticleController@store')->name("blog.store");

        Route::get('/active/{id}', 'Admin\ArticleController@active')->name('blog.active');
        Route::get('/delete/{id}', 'Admin\ArticleController@delete')->name('blog.delete');

        Route::get('update/{id}', 'Admin\ArticleController@edit')->name('blog.update');
        Route::post('update/{id}', 'Admin\ArticleController@update');
    });

    Route::group(['prefix' => 'brand'], function () {
        Route::get('/', 'Admin\BrandController@index')->name("brand.index");
        Route::get('/create', 'Admin\BrandController@create');
        Route::post('/store', 'Admin\BrandController@store')->name("brand.create");
    });


    Route::group(['prefix' => 'event'], function () {
    });

    Route::group(['prefix' => 'marketing'], function () {
    });

    Route::group(['prefix' => 'order'], function () {
        Route::get('/', 'Admin\OrderController@index');
        Route::get('/detail/{id}', 'Admin\OrderController@detailById');
    });

    Route::group(['prefix' => 'report'], function () {
    });

    Route::get('ckeditor', 'Admin\CkeditorController@index');
    Route::post('ckeditor/upload', 'Admin\CkeditorController@upload')->name('ckeditor.upload');
});
