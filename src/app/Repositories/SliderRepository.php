<?php

namespace App\Repositories;

class SliderRepository extends BaseRepository
{
    public function getModel(): string
    {
        return Slider::class;
    }
}
