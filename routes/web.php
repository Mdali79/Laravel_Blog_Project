<?php

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

Route::get('/blog', [\App\Http\Controllers\BlogPostController::class, 'index']);


Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);


Route::get('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'create']);

Route::post('/blog', [\App\Http\Controllers\BlogPostController::class, 'store'])->name('blog.store');

Route::get('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'edit'])->name('blog.edit');

Route::put('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'update'])->name('blog.update');

Route::delete('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'destroy'])->name('blog.destroy');

Route::get('/blog/{blogPost}/details', [\App\Http\Controllers\BlogPostController::class, 'read_more']);
