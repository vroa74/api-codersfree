<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::ApiResource('users', UserController::class);
Route::ApiResource('task', TaskController::class);
Route::ApiResource('Task', TaskController::class); // Ruta alternativa singular
Route::ApiResource('simple', \App\Http\Controllers\Api\APISimpleController::class);

// Ruta protegida para obtener el usuario autenticado|
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Ruta de prueba en la raíz del API
Route::get('/', function () {
    return 'hola desde el api';
});

Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/logout', [AuthController::class, 'logout']);
Route::post('auth/refresh', [AuthController::class, 'refresh']);
Route::post('auth/me', [AuthController::class, 'me']);

// Rutas genéricas con parámetro ID (se evalúan después de las rutas específicas)
// Route::post('/{id}', function () {
//     return 'hola desde el api POST '. request()->id;
// });
// Route::get('/{id}', function () {
//     return 'hola desde el api show ' . request()->id;
// });
// Route::put('/{id}', function () {
//     return 'hola desde el api put ' . request()->id;
// });
// Route::patch('/{id}', function () {
//     return 'hola desde el api patch ' . request()->id;
// });
// Route::delete('/{id}', function () {
//     return 'hola desde el api delete ' . request()->id;
// });
