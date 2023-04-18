<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutomobiliaiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SavininkaiController;

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

Route::get('/savininkai',[SavininkaiController::class, 'index'])->name('savininkai.index');
Route::get('/savininkai/create',[ SavininkaiController::class, 'create'])->name('savininkai.create');
Route::post('/savininkai/save',[ SavininkaiController::class, 'save'])->name('savininkai.save');
Route::get('/savininkai/{id}/edit',[ SavininkaiController::class, 'edit'])->name('savininkai.edit');
Route::post('/savininkai/{id}/update',[SavininkaiController::class,'update'])->name('savininkai.update');
Route::get('/savininkai/{id}/delete',[SavininkaiController::class,'delete'])->name('savininkai.delete');
Route::post('/savininkai/search',[SavininkaiController::class,'search'])->name('savininkai.search');

Route::resource('automobiliais', AutomobiliaiController::class);

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
