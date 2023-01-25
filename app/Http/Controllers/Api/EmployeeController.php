<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEmployeeReuqest;
use App\Http\Requests\UpdateEmployeeReuqest;
use App\Services\EmployeeService;

class EmployeeController extends Controller {

    public $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }


    public function create(CreateEmployeeReuqest $request)
    {
        $data = $request->validated();
        $response = $this->employeeService->createEmployee($data);

        return response()->json(['message' => "created", "data" => $response], 201);
    }

    public function update($id, UpdateEmployeeReuqest $request)
    {
        $data = $request->validated();
        $response = $this->employeeService->updateEmployee($id, $data);

        return response()->json(['message' => "Updated", "data" => $response], 200);
    }

    public function delete($id){
        $this->employeeService->deleteEmployee($id);

        return response()->json(['message' => "Deleted", "data" => []], 200);
    }

    public function findAll(){

        $res = $this->employeeService->findAll();

        return response()->json(['message' => "success", "data" => $res], 200);
    }


}