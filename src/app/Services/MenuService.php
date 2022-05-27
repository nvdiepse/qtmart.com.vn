<?php

namespace App\Services;

use App\Repositories\MenuRepository;

/**
 *
 */
class MenuService
{
    protected $MenuRepository;

    public function __construct(
        MenuRepository $MenuRepository
    ) {
        $this->MenuRepository = $MenuRepository;
    }

    public function getAll()
    {
        return $this->MenuRepository->getAll();
    }

    public function store($data)
    {
        return $this->MenuRepository->create($data);
    }

    public function updateById($id, $data)
    {
        return $this->MenuRepository->update($id, $data);
    }

    public function findById($id)
    {
        return $this->MenuRepository->findOne($id);
    }

    public function deleteById($id)
    {
        return $this->MenuRepository->delete($id);
    }

    public function findAll($orderBy = "Desc", $offset = 0, $limit = 25)
    {
        // return $this->MenuRepository->findAll($orderBy, $offset, $)
    }
}
