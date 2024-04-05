<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ManagerController;
use App\Models\Employe;
use App\Models\Manager;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resources([
    'employes' => EmployeController::class,
]);
Route::resources([
    'managers' => ManagerController::class,
]);
// Route::get('/create', [ManagerController::class,'create'])->name('create');
// Route::get('/createEmployer', [EmployeController::class,'create'])->name('createEmploye');
// Route::put('/store', [ManagerController::class,'store'])->name('store');
// Route::put('/storeEmploye', [ManagerController::class,'store'])->name('storeEmploye');
// Route::get('/', [ManagerController::class,'index'])->name('index');
// Route::delete('/destroy/{et}', [ManagerController::class,'destroy'])->name('destroy');

