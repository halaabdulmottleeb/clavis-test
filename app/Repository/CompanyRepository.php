<?php

namespace App\Repository;

use App\Models\Company;
use App\Repository\Adapter\AbstractRepository;

class CompanyRepository extends AbstractRepository {

    public function __construct()
    {
        $this->model = new Company();
    }
}