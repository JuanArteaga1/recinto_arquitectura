<?php

use App\Http\Controllers\persona_controller;
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
Route::GET('persona/create',[persona_controller::class, 'create'])->name('persona.create');
Route::POST('persona/store',[persona_controller::class, 'store'])->name('persona.store');
Route::GET('persona/principal',[persona_controller::class, 'index'])->name('persona.index');
Route::POST('persona/edit/{id}',[persona_controller::class, 'edit'])->name('persona.edit');