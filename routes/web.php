<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WorkUnitController;
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
    return redirect()->route('home');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/dashboard/login', 'login')->name('login');
    Route::post('/dashboard/login', 'authenticate')->name('authenticate');
    Route::get('/dashboard/logout', 'logout')->name('logout');
});

Route::controller(EmployeeController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('home');
    Route::get('/dashboard/detail/{id}', 'detail')->name('detail');
    Route::get('/dashboard/pdf', 'createPDF')->name('pdf');
    Route::get('/dashboard/create', 'create')->name('create');
    Route::post('/dashboard/store', 'store')->name('store');
    Route::get('/dashboard/edit/{id}', 'edit')->name('edit');
    Route::put('/dashboard/update/{id}', 'update')->name('update');
    Route::delete('/dashboard/delete/{id}', 'destroy')->name('destroy');
});

Route::get('/dashboard/workunit', [WorkUnitController::class, 'index'])->name('workunit');