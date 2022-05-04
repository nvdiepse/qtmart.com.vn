<?php

namespace App\Services\Client;

use App\Repositories\ProductRepository;

/**
 *
 */
class ProductService
{

    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * @param ProductRepository $productRepository
     */
    public function __construct(
        ProductRepository $productRepository
    )
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->productRepository->find($id);
    }


    public function getDealsOfTheWeek()
    {
        return $this->productRepository->getDealsOfTheWeek();
    }

    public function getAll($orderBy, $offset)
    {
        return $this->productRepository->getPaginate($orderBy, $offset);
    }

    /**
     *
     */
    public function search($options)
    {
        $this->productRepository->getAll();
    }
}
