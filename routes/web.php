<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// admin & user login
Route::get('/customer/login', [CustomerController::class, 'loginBlade'])->name('customer.login');
Route::get('/customer/create-account', [CustomerController::class, 'createBlade'])->name('customer.create-account');
Route::post('/customer/store-account', [CustomerController::class, 'storeAccount'])->name('customer.store-account');

// Admin Controller;
Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
});

// Customer Controller;
Route::middleware(['auth', 'role:customer'])->group(function(){
    Route::get('/customer/logout', [CustomerController::class, 'destroy'])->name('customer.logout');
    Route::get('/customer/index', [CustomerController::class, 'index'])->name('customer.index');
    Route::post('/customer/deposit', [CustomerController::class, 'deposit'])->name('customer.deposit');
    Route::post('/customer/withdrawal', [CustomerController::class, 'withdrawal'])->name('customer.withdrawal');
    Route::post('/customer/transfer', [CustomerController::class, 'transfer'])->name('customer.transfer');

});

// ...




require __DIR__.'/auth.php';
