<?php

use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::ApiResource('users', UserController::class);
Route::ApiResource('tasks', TaskController::class);

Route::get('/', function () {
    return 'hola desde el api';
});

Route::post('/{id}', function () {
    return 'hola desde el api POST '. request()->id;
});

Route::get('/{id}', function () {
    return 'hola desde el api show ' . request()->id;
});

Route::put('/{id}', function () {
    return 'hola desde el api put ' . request()->id;
});

Route::patch('/{id}', function () {
    return 'hola desde el api patch ' . request()->id;
});
Route::delete('/{id}', function () {
    return 'hola desde el api delete ' . request()->id;
});



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
