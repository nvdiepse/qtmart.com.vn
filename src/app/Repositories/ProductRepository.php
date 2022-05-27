<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository
{
    public function getModel(): string
    {
        return Product::class;
    }

    public function getDealsOfTheWeek()
    {
        return "";
        // return $this->model->where('is_deals_of_the_week', true)->get();
    }

    public function getHotBestSellers()
    {
        return "";
        // return $this->model->where('is_hot_best_seller', true)->get();
    }

    public function getHotNewArrivals()
    {
        return "";
        // return $this->model->where('is_hot_new_arrival', true)->get();
    }

    public function findBySlug($slug)
    {
        return "";
        // return $this->model->where('slug', $slug)->first();
    }

    public function getProducts()
    {
        return $this->model->orderByDesc('id')->paginate(10);
    }
}
