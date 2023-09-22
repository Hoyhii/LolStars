<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\SummonerNameController;
use App\Http\Controllers\UserController;
use App\Models\SummonerName;
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
Route::patch('/player/{id}', [UserController::class, 'update'])->name('players.update');
Route::delete('/player/{id}', [UserController::class, 'destroy'])->name('players.destroy');


Route::get('/summoner/create', [SummonerNameController::class, 'create'])->name('summoner.create');
Route::post('/summoner', [SummonerNameController::class, 'store'])->name('summoner.store')->middleware('auth');
Route::get('/summoner/{id}/edit', [SummonerNameController::class, 'edit'])->name('summoner.edit');
Route::patch('/summoner/{id}', [SummonerNameController::class, 'update'])->name('summoner.update');
Route::delete('/summoner/{id}', [SummonerNameController::class, 'destroy'])->name('summoner.destroy');
