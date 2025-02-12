<?php

use App\Http\Controllers\TarefaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/usuario', 
[UsuarioController::class, 'store']); 

Route::get('/usuario/{id}/find',
[UsuarioController::class, 'findById']);

Route::get('/usuario', 
[UsuarioController::class, 'index']);   

Route::get('/usuario/search', 
[UsuarioController::class, 'searchByName']); 

Route::get('/usuario/search/email', 
[UsuarioController::class, 'searchByEmail']);

Route::delete('/usuario/{id}/delete', 
[UsuarioController::class, 'delete']);

Route::put('/usuario', 
[UsuarioController::class, 'update']);







Route::post('/tarefa', 
[TarefaController::class, 'store']); 

Route::get('/tarefa/{id}/find',
[TarefaController::class, 'findById']);

Route::get('/tarefa', 
[TarefaController::class, 'index']);   

























Route::put('/tarefa', 
[TarefaController::class, 'update']);

Route::patch('tarefa/{id}/status', 
[TarefaController::class, 'updateStatus']);