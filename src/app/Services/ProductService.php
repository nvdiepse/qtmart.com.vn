<?php

namespace App\Services;

use App\Repositories\ArticleRepository;

/**
 *
 */
class ProductService
{

    /**
     * @var ArticleRepository
     */
    private $productRepository;

    /**
     * @param ArticleRepository $productRepository
     */
    public function __construct(
        ArticleRepository $productRepository
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
}
