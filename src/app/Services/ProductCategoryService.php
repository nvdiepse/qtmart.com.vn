<?php

namespace App\Services;

use App\Repositories\ProductCategoryRepository;

/**
 *
 */
class ProductCategoryService
{
    protected $ProductCategoryRepository;

    public function __construct(
        ProductCategoryRepository $ProductCategoryRepository
    ) {
        $this->ProductCategoryRepository = $ProductCategoryRepository;
    }

    public function getAll()
    {
        return $this->ProductCategoryRepository->getAll();
    }

    public function create($data)
    {
        return $this->brandRepository->create($data);
    }

    public function updateById($id, $data)
    {
        return $this->brandRepository->update($id, $data);
    }

    public function findById($id)
    {
        return $this->brandRepository->findOne($id);
    }

    public function deleteById($id)
    {
        return $this->productCategoryRepository->delete($id);
    }

    public function findAll($orderBy = "Desc", $offset = 0, $limit = 25)
    {
        // return $this->productCategoryRepository->findAll($orderBy, $offset, $)
    }

    public function getPrCategoriesSort()
    {
        // $prCategoriesSort = $this->ProductCategoryRepository;
    }
}
