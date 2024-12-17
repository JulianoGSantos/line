<?php

use App\Http\Controllers\Client;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StartController;
use Illuminate\Support\Facades\Route;

//página inicial
Route::get('/start', [StartController::class, 'index'])->name('start.index');

//clientes
Route::get('/client/list', [ClientController::class, 'list'])->name('client.list');
Route::post('/client/register', [ClientController::class, 'store'])->name('client.store');
Route::get('/client', [ClientController::class, 'index'])->name('client.index');

//produtos
Route::get('/product', [ProductController::class, 'index'])->name('product.index');

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
