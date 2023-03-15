<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\BlogPostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


 

Route::get('/blog', [\App\Http\Controllers\Api\ApiBlogPostController::class, 'index']);
Route::post('/blog', [\App\Http\Controllers\Api\ApiBlogPostController::class, 'store']);
Route::get('/blog/{id}', [\App\Http\Controllers\Api\ApiBlogPostController::class, 'show']);
Route::put('/blog/{id}', [\App\Http\Controllers\Api\ApiBlogPostController::class, 'update']);
Route::delete('/blog/{id}', [\App\Http\Controllers\Api\ApiBlogPostController::class, 'destroy']);



