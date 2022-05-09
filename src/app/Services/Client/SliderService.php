<?php

namespace App\Services\Client;

use App\Repositories\SliderRepository;

/**
 *
 */
class SliderService
{

    protected $sliderRepository;

    public function __construct(
        SliderRepository $sliderRepository
    ) {
        $this->sliderRepository = $sliderRepository;
    }

    public function getAll()
    {
        return $this->sliderRepository->getAll();
    }
}
