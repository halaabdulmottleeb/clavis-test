<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\UserService;

class CompanyController extends Controller {

    public $companyService;

    public function __construct(UserService $companyService)
    {
        $this->companyService = $companyService;
    }


}