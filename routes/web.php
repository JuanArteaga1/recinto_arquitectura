<?php

use App\Http\Controllers\ProfileController;
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
use App\Http\Controllers\persona_controller;

Route::get('/personas', [persona_controller::class, 'index'])->name('personas.index');
Route::get(' /personas/create', [persona_controller::class, 'create'])->name('personas.create');
Route::post('/personas', [persona_controller::class, 'store'])->name('personas.store');
Route::get('/personas/{id}/edit', [persona_controller::class, 'editar'])->name('personas.edit');
Route::get('/personas/recinto', [persona_controller::class, 'principal'])->name('personas.recinto');
Route::post('/personas/update/{id}', [persona_controller::class, 'update'])->name('personas.update');
Route::delete('/personas/delete/{id}', [persona_controller::class, 'delete'])->name('personas.delete');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
