<?php

namespace App\Repositories;

use App\Models\Menu;

class MenuRepository extends BaseRepository
{
    public function getModel(): string
    {
        return Menu::class;
    }

    public  function getSort()
    {
        return $this->model->where('status', Menu::STATUS_ACTIVE)
            ->select('id', 'parent_id', 'name')
            ->get();
    }

    public function getPrCategories()
    {
        return $this->model->orderByDesc('id')->paginate(10);
    }
}
