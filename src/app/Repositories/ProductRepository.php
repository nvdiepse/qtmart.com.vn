<?php

namespace App\Repositories;

class ProductRepository extends BaseRepository
{
    public function getModel(): string
    {
        return Product::class;
    }

    public function getDealsOfTheWeek()
    {
        // return $this->model->where('')
    }
}
