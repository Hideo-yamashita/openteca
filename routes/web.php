<?php

use Illuminate\Support\Facades\Route;

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

use App\http\Controllers\UserController;
use Illuminate\Http\Request;

Route::get('/', [UserController::class,'homeView']);
Route::get('/login', [UserController::class,'loginView']);
Route::get('/cadastro', [UserController::class,'cadastroView']);
Route::get('/meuslivros', [UserController::class,'meuslivrosView']);
Route::get('/informacoeslivro', [UserController::class,'informacoeslivroView']);
Route::get('/minhaconta', [UserController::class,'minhacontaView']);
Route::get('/resultadopesquisalivro', [UserController::class,'resultadopesquisalivroView']);
