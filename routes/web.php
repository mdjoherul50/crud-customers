<?php

use App\Http\Controllers\CustomerController;
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



Route::get('/',[CustomerController::class,'index'])->name('customers.index');
Route::get('/customers/create',[CustomerController::class, 'create'])->name('customers.create');
Route::get('/customers/{id}',[CustomerController::class,'show'])->name('customers.show');
Route::post('/customers/store', [CustomerController::class,'store'])->name('customers.store');
Route::get('/customers/{id}/edit',[CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{id}', [CustomerController::class,'update'])->name('customers.update');
Route::delete('/customers/{id}', [CustomerController::class,'destroy'])->name('customers.destroy');
