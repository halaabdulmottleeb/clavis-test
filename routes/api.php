<?php

use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login', [UserController::class, 'login'])->middleware();
Route::post('/register', [UserController::class, 'register']);

Route::middleware([
  'auth:api'
])->group(function () {

    Route::post('/company', [CompanyController::class, 'create']);
    Route::put('/company/{id}', [CompanyController::class, 'update']);
    Route::delete('/company/{id}', [CompanyController::class, 'delete']);

    Route::post('/employee', [EmployeeController::class, 'create']);
    Route::put('/employee/{id}', [EmployeeController::class, 'update']);
    Route::delete('/employee/{id}', [EmployeeController::class, 'delete']);

});
