<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository extends BaseRepository
{
    public function getModel(): string
    {
        return Customer::class;
    }
}
