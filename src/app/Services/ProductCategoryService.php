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

    public function store($data)
    {
        return $this->ProductCategoryRepository->create($data);
    }

    public function updateById($id, $data)
    {
        return $this->ProductCategoryRepository->update($id, $data);
    }

    public function findById($id)
    {
        return $this->ProductCategoryRepository->findOne($id);
    }

    public function deleteById($id)
    {
        return $this->ProductCategoryRepository->delete($id);
    }

    public function findAll($orderBy = "Desc", $offset = 0, $limit = 25)
    {
        // return $this->productCategoryRepository->findAll($orderBy, $offset, $)
    }

    public function getPrCategoriesSort()
    {
        // $prCategoriesSort = $this->ProductCategoryRepository;
    }

    public function getPrCategories()
    {
        return $this->ProductCategoryRepository->getPrCategories();
    }
}
