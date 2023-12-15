<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportExportControllor;
use App\Http\Controllers\AdminController;


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

Route::get('dashboard', [AdminController::class, 'index']);

Route::post('viewAllData', [AdminController::class, 'view'])->name('viewAllData');

Route::get('home',[ImportExportControllor::class,'view']);

Route::post('viewData',[ImportExportControllor::class,'import'])->name('viewData');

Route::get('export',[ImportExportControllor::class,'export']);




