<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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
Route::get('/',[WelcomeController::class,'welcome']);

Route::get('/login', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [ProfileController::class, 'getProfile'])->name('profile');
    Route::post('profile/{id}', [ProfileController::class, 'updateProfile'])->name('updateProfile');
    Route::get('delete-profile', [ProfileController::class, 'deleteProfile'])->name('delete-profile');

    Route::get('book', [BookController::class, 'index'])->name('book');
    Route::get('add-book', [BookController::class, 'create'])->name('add-book');
    Route::post('add-book', [BookController::class, 'store'])->name('add-book');
    Route::get('update-book/{id}', [BookController::class, 'edit'])->name('update-book');
    Route::post('update-book/{id}', [BookController::class, 'update'])->name('update-book');
    Route::get('delete-book/{id}', [BookController::class, 'destroy'])->name('delete-book');

    Route::get('category', [CategoryController::class, 'index'])->name('category');
    Route::get('add-category', [CategoryController::class, 'create'])->name('add-category');
    Route::post('add-category', [CategoryController::class, 'store'])->name('add-category');
    Route::get('update-category/{id}', [CategoryController::class, 'edit'])->name('update-category');
    Route::post('update-category/{id}', [CategoryController::class, 'update'])->name('update-category');
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy'])->name('delete-category');

    Route::get('borrow', [BorrowController::class, 'index'])->name('borrow');
    Route::get('cart', [BorrowController::class, 'cart'])->name('cart');
    Route::post('check-member', [BorrowController::class, 'checkMember'])->name('check-member');
    Route::post('add-cart', [BorrowController::class, 'addCart'])->name('add-cart');
    Route::get('delete-cart/{id}', [BorrowController::class, 'deleteCart'])->name('delete-cart');
    Route::post('add-borrow', [BorrowController::class, 'addBorrow'])->name('add-borrow');

    Route::get('report', [ReportController::class,'index'])->name('report');
    Route::get('check-forfeit/{code}', [ReportController::class,'checkForfeit'])->name('check-forfeit');
    Route::get('done-forfeit/{code}', [ReportController::class,'doneForfeit'])->name('done-forfeit');
    Route::get('report/data-user/{code_user}', [ReportController::class,'dataUser'])->name('data-user');
    
    Route::get('user', [UserController::class,'index'])->name('user');
    Route::get('add-user', [UserController::class,'create'])->name('add-user');
    Route::post('add-user', [UserController::class,'store'])->name('add-user');
    Route::post('update-user/{id}', [UserController::class,'update'])->name('update-user');
});

require __DIR__ . '/auth.php';
