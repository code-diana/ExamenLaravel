<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Pagina principal seguramente un login
Route::get('/', PetController::class)->name('login');
Route::post('/', [PetController::class , 'login'])->name('login');

//Registrar mascota
Route::get('register', [PetController::class , 'register']);
Route::post('register', [PetController::class , 'register']);

//Cerrar Sesión
Route::get('logout', [PetController::class , 'logout']);

//Pagina general
Route::get('startPage', [PetController::class , 'start'])->name('principal')->middleware('user');

// //listar
// Route::get('listar', [PetController::class , 'listar'])->middleware('user');

//ver fotos
Route::get('verfoto/{id}', [PetController::class , 'verfoto'])->middleware('user');

