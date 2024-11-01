<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('project/hello', [\App\Http\Controllers\UsersController::class, 'SayHello']); // اصلاح نام مسیر
Route::get('users/{id}/show', [\App\Http\Controllers\UsersController::class, 'show']); // حذف مدل از مسیر برای جلوگیری از خطا
Route::get('users/list', [\App\Http\Controllers\UsersController::class, 'show_list']);

// اصلاح نام کنترلر
Route::post('LaptopController/Specifications', [\App\Http\Controllers\LaptapController::class, 'Specifications']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('users/store', [\App\Http\Controllers\UsersController::class, 'store']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
