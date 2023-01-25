<?php

namespace App\Services;

use App\Repository\CompanyRepository;

class CompanyService {

    public $companyRepository;
    
    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }



}