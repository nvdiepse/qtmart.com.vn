<?php

namespace App\Repositories;

use App\Models\Brand;

class BrandRepository extends BaseRepository
{
    public function getModel(): string
    {
        return Brand::class;
    }
}
