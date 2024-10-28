<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleCheck;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
                           //middlerware RoleChceck blm bekerja
// Route::group([ 'middleware' => 'auth', 'RoleCheck'], function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//     Route::resource('/admin', App\Http\Controllers\AdminController::class);
// })->middleware(['auth', 'RoleCheck']);

Route::middleware(['auth', 'RoleCheck'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin', App\Http\Controllers\AdminController::class);
});

require __DIR__.'/auth.php';
