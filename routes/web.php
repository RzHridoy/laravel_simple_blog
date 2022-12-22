<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
// Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('blog_post/{pId}', [HomeController::class, 'blog_post'])->name('blog_post');
Route::get('category_detail/{catId}', [HomeController::class, 'category_detail'])->name('category_detail');




Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ROUTES FOR CATEGORY
    Route::get('/category/create', [CategoryController::class, 'create'])->name('create_category');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('store_category');
    Route::get('/category', [CategoryController::class, 'index'])->name('index_category');
    Route::get('/category/edit/{catId}', [CategoryController::class, 'edit'])->name('edit_category');
    Route::post('/category/update/{catId}', [CategoryController::class, 'update'])->name('update_category');
    Route::get('/category/delete/{catId}', [CategoryController::class, 'delete'])->name('delete_category');

    // ROUTES FOR BLOGS
    Route::get('/blog/create', [BlogController::class, 'create'])->name('create_blog');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('store_blog');
    Route::get('/blog', [BlogController::class, 'index'])->name('index_blog');
    Route::get('/blog/edit/{bId}', [BlogController::class, 'edit'])->name('edit_blog');
    Route::post('/blog/update/{bId}', [BlogController::class, 'update'])->name('update_blog');
    Route::get('/blog/delete/{bId}', [BlogController::class, 'delete'])->name('delete_blog');

    // ROUTE FOR USER
    Route::get('/dashboard/create_user', [UserController::class, 'create_user'])->name('create_user');
    Route::post('/dashboard/store_user', [UserController::class, 'store_user'])->name('store_user');
});
