<?php

namespace App\Repositories;

use App\Models\ProductCategory;

class ProductCategoryRepository extends BaseRepository
{
    public function getModel(): string
    {
        return ProductCategory::class;
    }

    public  function getSort()
    {
        return $this->model->where('status', ProductCategory::STATUS_ACTIVE)
            ->select('id', 'parent_id', 'name')
            ->get();
    }

    public function getPrCategories()
    {
        return $this->model->orderByDesc('id')->paginate(10);
    }
}
