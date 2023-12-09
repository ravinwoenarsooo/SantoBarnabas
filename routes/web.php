<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FOController;


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

Route::get('/', [FOController::class, 'show'])->name('home');
Route::get('/warta-paroki/{id}', [FOController::class,'showWartaParoki'])->name('warta-paroki.show');
Route::get('/informasi-gereja/{id}', [FOController::class,'showInformasi'])->name('informasi-gereja.show');