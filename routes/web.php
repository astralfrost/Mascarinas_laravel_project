<?php
// routes/web.php
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;

// Static pages
Route::get('/', [StaticPageController::class, 'home'])->name('home');
Route::get('/about', [StaticPageController::class, 'about'])->name('about');
Route::get('/features', [StaticPageController::class, 'features'])->name('features');

// Tasks routes
Route::resource('tasks', TaskController::class);

// Categories routes
Route::resource('categories', CategoryController::class)->except(['show', 'create', 'edit']);