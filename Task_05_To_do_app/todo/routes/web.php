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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todoapp', [App\Http\Controllers\TodolistController::class, 'index'])->name('index');
Route::post('/todoapp', [App\Http\Controllers\TodolistController::class, 'store'])->name('store');
Route::delete('/{todolist:id}', [App\Http\Controllers\TodolistController::class, 'destroy'])->name('destroy');
