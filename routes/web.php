<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;

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

// Route untuk landing page (akses terbuka untuk semua pengguna)
Route::get('/', function () {
    return view('landing');
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route khusus untuk Admin -> print pdf dan excel
Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function () {
    Route::prefix('person')->name('person.')->group(function () {
        Route::get('/', [PersonController::class, 'index'])->name('index');
        Route::get('/print-pdf-person', [PersonController::class, 'printAll'])->name('print');
        Route::get('/export-data-person', [PersonController::class, 'exportData'])->name('data');
        Route::get('/export-excel-person', [PersonController::class, 'exportExcel'])->name('export');
    });

    Route::prefix('item')->name('item.')->group(function () {
        Route::get('/', [ItemController::class, 'index'])->name('index');
        Route::get('/print-pdf-item', [ItemController::class, 'printAll'])->name('print');
        Route::get('/export-data-item', [ItemController::class, 'exportData'])->name('data');
        Route::get('/export-excel-item', [ItemController::class, 'exportExcel'])->name('export');
    });
});

// Route khusus untuk Kader -> crud person & item
Route::middleware(['auth', 'isKader'])->prefix('kader')->group(function () {
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
});
