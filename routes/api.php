<?php 

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RegistrasiController;
use App\Http\Controllers\Api\ScheduleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth:sanctum');

Route::apiResource('schedules', ScheduleController::class)
    ->middleware('auth:sanctum');

Route::apiResource('registrasi', RegistrasiController::class, [
    'as' => 'api'
])->middleware('auth:sanctum');
