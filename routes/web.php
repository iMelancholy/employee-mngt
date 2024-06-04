<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employController;

Route::get('employ', [App\Http\Controllers\employController::class, 'index']);
Route::get('employ/create',  [App\Http\Controllers\employController::class, 'create']);
Route::get('employ/create',  [App\Http\Controllers\employController::class, 'store']);
Route::get('employ/{id}/edit', [App\Http\Controllers\employController::class, 'edit']);
Route::put('employ/{id}/edit', [App\Http\Controllers\employController::class, 'update']);
Route::get('employ/{id}/delete', [App\Http\Controllers\employController::class, 'destroy']);
Route::get('employ/{id}/table', [App\Http\Controllers\employController::class, 'table']);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('employ', [\App\Http\Controllers\EmployController::class, 'index'])->name('employ.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});


// Route::post('/employ/create', [\App\Http\Controllers\EmployController::class, 'create']);
// Route::post('/employ/index', [\App\Http\Controllers\EmployController::class, 'create'])->name('employ.create');



