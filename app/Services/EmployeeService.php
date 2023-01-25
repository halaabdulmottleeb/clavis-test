<?php

namespace App\Services;

use App\Repository\EmployeeRepository;

class EmployeeService {

    public $employeeRepository;
    
    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function createEmployee($data){
        return $this->employeeRepository->create($data);
    }

    public function updateEmployee($id, $data){
        return $this->employeeRepository->updateWhere('id', $id, $data);
    }

    public function deleteEmployee($id)
    {
        return $this->employeeRepository->delete($id);
    }

    public function findAll(){

        return $this->employeeRepository->findAll([], ['note']);
    }
}