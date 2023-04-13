<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/', UserController::class)->name('login');
Route::post('/', [UserController::class , 'login'])->name('login');

//Cerrar Sesión
Route::get('logout', [UserController::class , 'logout']);

//Pagina general
Route::get('startPage', [UserController::class , 'start'])->name('principal')->middleware('user');

