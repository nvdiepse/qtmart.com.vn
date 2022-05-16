<?php

namespace App\Services;

use App\Repositories\CustomerRepository;

/**
 *
 */
class CustomerService
{
    private $customerRepository;

    public function __construct(
        CustomerRepository $customerRepository
    )
    {
        $this->customerRepository = $customerRepository;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->customerRepository->findOne($id);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function store($data)
    {
        return $this->customerRepository->create($data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed|void
     */
    public function update($id, $data)
    {
        return $this->customerRepository->update($id, $data);
    }

    /**
     *
     */
    public function search($options)
    {
        $this->customerRepository->getAll();
    }

    public function delete($id)
    {
        $this->customerRepository->delete($id);
    }

    public function getAll($limit, $offset)
    {
        return $this->customerRepository->getAll($limit, $offset);
    }
}
