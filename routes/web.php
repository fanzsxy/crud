<?php

use App\Http\Controllers\GuruController;
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
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
Route::get('/guru',[GuruController::class,'index']);
Route::get('/guru/create',[GuruController::class,'create']);
Route::post('/guru/store',[GuruController::class,'store']);
Route::get('/guru/{id}/{id_barang}/edit',[GuruController::class,'edit'])->name('guru.edit');
Route::put('/guru/{id}',[GuruController::class,'update']);
Route::delete('/guru/{id}/{id_barang}',[GuruController::class,'destroy']);

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

