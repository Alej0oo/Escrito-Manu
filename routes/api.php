<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/tarea',[TareaController::class, 'CrearTarea']);
Route::get('/tarea', [TareaController::class, 'ListarTareas']);
Route::get('/tarea/{id}', [TareaController::class, 'ListarUnaTarea']);
Route::patch('/tarea/{id}', [TareaController::class, 'ModificarTarea']);
Route::delete('/tarea/{id}', [TareaController::class, 'EliminarTarea']);
Route::get('/tarea/autor/{autor}', [TareaController::class, 'BuscarTareaPorAutor']);