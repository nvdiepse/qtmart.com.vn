<?php

namespace App\Services;

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
        return $this->productRepository->findOne($id);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function store($data)
    {
        return $this->productRepository->create($data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed|void
     */
    public function update($id, $data)
    {
        return $this->productRepository->update($id, $data);
    }

    /**
     *
     */
    public function search($options)
    {
        $this->productRepository->getAll();
    }

    public function delete($id)
    {
        $this->productRepository->delete($id);
    }

    public function getAll($limit, $offset)
    {
        return $this->productRepository->getAll($limit, $offset);
    }
}
