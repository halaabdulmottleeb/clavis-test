<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\UserService;

class UserController extends Controller {

    public $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login(LoginRequest $request)
    {
       return $this->userService->login($request->validated());
    }

    public function register(RegisterRequest $request)
    {
        $this->userService->register($request->validated());

        return response()->json(["message" => "User Created Successfuly", "data" => null], 201);
    }

}