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


Route::get('/', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('/create', [App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
Route::post('/', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('/{contact}/edit', [App\Http\Controllers\ContactController::class, 'edit'])->name('contact.edit');
Route::put('/{contact}', [App\Http\Controllers\ContactController::class, 'update'])->name('contact.update');
Route::delete('/{contact}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.destroy');
Route::get('/{contact}', [App\Http\Controllers\ContactController::class, 'show'])->name('contact.show');
