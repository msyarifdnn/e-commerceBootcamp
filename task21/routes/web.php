<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['admin'])->group(function () {
  Route::get('/products', function () {
    return view('dashboard.products.index');
  })->name('products');

  Route::resource('categories', ProductCategoryController::class);
});

Route::get('/add-new-product', function () {
  return view('dashboard.products.add');
})->name('add-product');

Route::get('/edit-product', function () {
  return view('dashboard.products.edit');
})->name('edit-product');

// Route::get('/categories', function () {
//   return view('dashboard.categories.index');
// })->name('categories');

Route::get('/add-new-category', function () {
  return view('dashboard.categories.add');
})->name('add-new-category');

Route::get('/edit-category', function () {
  return view('dashboard.categories.edit');
})->name('edit-category');



require __DIR__.'/auth.php';
