<?php

namespace App\Repositories;

use App\Models\Slider;

class SliderRepository extends BaseRepository
{
    public function getModel(): string
    {
        return Slider::class;
    }
}
