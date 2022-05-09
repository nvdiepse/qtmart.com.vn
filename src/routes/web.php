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

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'Admin\ArticleController@index');
        Route::get('/create', 'Admin\ArticleController@create');
    });

    Route::group(['prefix' => 'event'], function () {
    });

    Route::group(['prefix' => 'marketing'], function () {
    });

    Route::group(['prefix' => 'order'], function () {
    });

    Route::group(['prefix' => 'report'], function () {
    });
});
