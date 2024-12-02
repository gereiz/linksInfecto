<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Topicos\TopicoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/topicos', [TopicoController::class, 'index'])->name('topicos');

Route::any('/topico/{id}', [TopicoController::class, 'getTopico'])->name('topico');
 