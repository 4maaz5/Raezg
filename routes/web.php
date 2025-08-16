<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin-dashboard/', [AdminController::class, 'index'])->name('admin-dashboard');
Route::get('categories/', [CategoryController::class, 'index'])->name('admin-categories');
Route::get('create-categories/', [CategoryController::class, 'create'])->name('create-categories');
Route::get('blog/', [BlogController::class, 'index'])->name('admin-blog');
Route::get('create-blog/', [BlogController::class, 'create'])->name('create-blog');
Route::get('subscription/', [SubscriptionController::class, 'index'])->name('subscription');
Route::get('create-subscription/', [SubscriptionController::class, 'create'])->name('create-subscription');
Route::get('projects/', [ProjectsController::class, 'index'])->name('projects');
Route::get('create-projects/', [ProjectsController::class, 'create'])->name('create-project');
Route::get('subscribers/', [SubscriptionController::class, 'showSubscriber'])->name('show-subscriber');
Route::get('news/', [NewsController::class, 'index'])->name('news');
Route::get('create-news/', [NewsController::class, 'create'])->name('create-news');
