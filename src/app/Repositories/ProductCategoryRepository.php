<?php

namespace App\Repositories;

use App\Models\ProductCategory;

class ProductCategoryRepository extends BaseRepository
{
    public function getModel(): string
    {
        return ProductCategory::class;
    }
}
