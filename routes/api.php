<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Topicos\TopicoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {
    route::get('/topicos', [TopicoController::class, 'index'])->name('topicos');
    route::any('topico', [TopicoController::class, 'getTopico'])->name('topico');
});
