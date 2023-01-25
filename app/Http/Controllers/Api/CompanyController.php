<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCompanyReuqest;
use App\Http\Requests\UpdateCompanyReuqest;
use App\Services\CompanyService;

class CompanyController extends Controller {

    public $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function create(CreateCompanyReuqest $request)
    {
        $data = $request->validated();
        $response = $this->companyService->createCompany($data);

        return response()->json(['message' => "created", "data" => $response], 201);
    }

    public function update($id, UpdateCompanyReuqest $request)
    {
        $data = $request->validated();
        $response = $this->companyService->updateCompany($id, $data);

        return response()->json(['message' => "Updated", "data" => $response], 200);
    }

    public function delete($id){
        $this->companyService->deleteCompany($id);

        return response()->json(['message' => "Deleted", "data" => $response], 200);
    }
}