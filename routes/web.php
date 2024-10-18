<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ItemController;

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
    return view('landing');
});

Route::prefix('person')->name('person.')->group(function () {
    Route::get('/', [PersonController::class, 'index'])->name('index');
    Route::post('/store', [PersonController::class, 'store'])->name('store');
    Route::get('/edit/{person}', [PersonController::class, 'edit'])->name('edit');
    Route::put('/update/{person}', [PersonController::class, 'update'])->name('update');
    Route::delete('/destroy/{person}', [PersonController::class, 'destroy'])->name('destroy');
});


Route::prefix('item')->name('item.')->group(function () {
    Route::get('/', [ItemController::class, 'index'])->name('index'); 
    Route::get('/create', [ItemController::class, 'create'])->name('create');
    Route::post('/store', [ItemController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ItemController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ItemController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [ItemController::class, 'destroy'])->name('destroy');
});

Route::get('/person/print', [PersonController::class, 'printAll'])->name('person.print');
Route::get('/item/print', [ItemController::class, 'printAll'])->name('item.print');
