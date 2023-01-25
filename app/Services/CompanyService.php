<?php

namespace App\Services;

use App\Repository\CompanyRepository;

class CompanyService {

    public $companyRepository;
    
    public function __construct(CompanyRepository $companyRepository )
    {
        $this->companyRepository = $companyRepository;
    }

    public function createCompany($data){
        return $this->companyRepository->create($data);
    }

    public function updateCompany($id, $data){
        return $this->companyRepository->updateWhere('id', $id, $data);
    }

    public function deleteCompany($id)
    {
        return $this->companyRepository->delete($id);
    }
}