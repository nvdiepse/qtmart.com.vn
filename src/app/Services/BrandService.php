<?php

namespace App\Services;

use App\Repositories\BrandRepository;

/**
 *
 */
class BrandService
{
    private $brandRepository;

    public function __construct(
        BrandRepository $brandRepository
    )
    {
        $this->brandRepository = $brandRepository;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->brandRepository->findOne($id);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function store($data)
    {
        return $this->brandRepository->create($data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed|void
     */
    public function update($id, $data)
    {
        return $this->brandRepository->update($id, $data);
    }

    /**
     *
     */
    public function search($options)
    {
        $this->brandRepository->getAll();
    }

    public function delete($id)
    {
        $this->brandRepository->delete($id);
    }

    public function getPaginate()
    {
        return $this->brandRepository->getPaginate();
    }
}
