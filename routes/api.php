<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\UsuarioController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/dispositivos', [DispositivoController::class, 'index']);
Route::apiResource('usuario', UsuarioController::class);
Route::post('/usuario/login', [UsuarioController::class, 'login']);

