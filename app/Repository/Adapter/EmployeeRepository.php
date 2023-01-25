<?php

namespace App\Repository;

use App\Models\Employee;
use App\Repository\Adapter\AbstractRepository;

class EmployeeRepository extends AbstractRepository {

    public function __construct()
    {
        $this->model = new Employee();
    }
}