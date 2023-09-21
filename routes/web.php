<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [MainController::class, 'main'])->name('main');

Auth::routes();

Route::get('/player/{id}/profile', [UserController::class, 'index'])->name('players.index');
Route::get('/player/create', [UserController::class, 'create'])->name('players.create');
Route::post('/player', [UserController::class, 'store'])->name('players.store');
Route::get('/player/{id}', [UserController::class, 'show'])->name('players.show');
Route::get('/player/{id}/edit', [UserController::class, 'edit'])->name('players.edit');
Route::put('/player/{id}', [UserController::class, 'update'])->name('players.update');
Route::delete('/player/{id}', [UserController::class, 'destroy'])->name('players.destroy');
