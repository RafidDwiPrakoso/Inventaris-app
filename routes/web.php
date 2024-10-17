<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventariController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LandingPageController;
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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/inventaris', [InventariController::class, 'index'])->name('inventari');

Route::get('pages.home', [LandingPageController::class, 'index'])-> name('landing_page');

Route::prefix('/inventari')->name('inventari.')->group(function() {
    Route::get('/create', [InventariController::class, 'create'])->name('create');
    Route::post('/store', [InventariController::class, 'store'])->name('store');
    Route::get('/', [InventariController::class, 'index'])->name('home');
    Route::get('/{id}', [InventariController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [InventariController::class, 'update'])->name('update');
    Route::delete('/{id}', [InventariController::class, 'destroy'])->name('delete');
    Route::get('/{id}/show', [InventariController::class, 'show'])->name('show');
});

Route::prefix('/users')->name('user.')->group(function(){
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::get('/', [UserController::class, 'index'])->name('home');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/{id}', [UserController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('delete');
});
