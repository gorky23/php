<?php

use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\ContractController;
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

Route::get('/', function () {
    return view('index');
});

# Faktury
Route::get('/faktury', [InvoicesController::class, 'index'])->name('invoices.index');
Route::get('/faktury/dodaj', [InvoicesController::class, 'create'])->name('invoices.create');
Route::post('/faktury/zapisz', [InvoicesController::class, 'store'])->name('invoices.store');
Route::get('/faktury/edytuj/{id}', [InvoicesController::class, 'edit'])->name('invoices.edit');
Route::put('/faktury/zmien/{id}', [InvoicesController::class, 'update'])->name('invoices.update');
Route::delete('/faktury/usun/{id}', [InvoicesController::class, 'delete'])->name('invoices.delete');

# Umowy
Route::get('/umowy', [ContractController::class, 'index'])->name('contract.index');
Route::get('/umowy/dodaj', [ContractController::class, 'create'])->name('contract.create');
Route::post('/umowy/zapisz', [ContractController::class, 'store'])->name('contract.store');
Route::get('/umowy/edytuj/{id}', [ContractController::class, 'edit'])->name('contract.edit');
Route::put('/umowy/zmien/{id}', [ContractController::class, 'update'])->name('contract.update');
Route::delete('/umowy/usun/{id}', [ContractController::class, 'delete'])->name('contract.delete');
