<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/update/{product}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/delete/{product}', [ProductController::class, 'delete'])->name('products.delete');
Route::delete('/products/destroy/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/users/{user}/products', [UserController::class, 'userProducts'])->name('users.products');
Route::post('/users/{user}/products/add', [UserController::class, 'addProduct'])->name('users.products.add');
Route::delete('/users/{user}/products/remove/{product}', [UserController::class, 'removeProduct'])->name('users.products.remove');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
Route::delete('/users/destroy/{user}', [UserController::class, 'destroy'])->name('users.destroy');


Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
