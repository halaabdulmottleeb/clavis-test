<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNoteReuqest;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use App\Services\NoteService;

class NoteController extends Controller {

    public $noteService;

    public function __construct(NoteService $noteService)
    {
        $this->noteService = $noteService;
    }

    public function createUserNote (CreateNoteReuqest $request)
    {
        $data = $request->validated();
        $data['parent_type'] =  User::class ;
        $this->noteService->create($data);

        return response()->json(['message' => "created", "data" => []], 201);
    }

    public function createEmployeeNote (CreateNoteReuqest $request)
    {
        $data = $request->validated();
        $data['parent_type'] =  Employee::class ;
        $this->noteService->create($data);

        return response()->json(['message' => "created", "data" => []], 201);
    }

    public function createCompanyNote (CreateNoteReuqest $request)
    {
        $data = $request->validated();
        $data['parent_type'] =  Company::class ;
        $this->noteService->create($data);

        return response()->json(['message' => "created", "data" => []], 201);
    }

}