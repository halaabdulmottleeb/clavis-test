<?php

namespace App\Services;

use App\Repository\EmployeeRepository;

class EmployeeService {

    public $employeeRepository;
    
    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }



}