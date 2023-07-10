<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;


Route::get('/detarefas', [TarefaController::class, 'index']);
Route::post('/detarefas', [TarefaController::class, 'store']);
Route::get('detarefas/{id}', [TarefaController::class, 'show']);
Route::put('detarefas/{id}', [TarefaController::class, 'update']);
Route::delete('detarefas/{id}', [TarefaController::class, 'destroy']);
