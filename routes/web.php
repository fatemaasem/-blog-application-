<?php

use App\Http\Controllers\PostController;
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

Route::get('/home', function () {
    return view('posts/layouts/app');
});
Route::get('/', function () {
    return view('posts/layouts/app');
});
Route::controller(PostController::class)->group(function () {
    Route::get('/posts/all', 'all');
    Route::get('/posts/show/{id}', 'show');
    Route::get('/posts/create', 'create');
    Route::post('/posts/store', 'store');
    Route::get('/posts/edit/{id}', 'edit');
    Route::post('/posts/update/{id}', 'update');
    Route::post('/posts/delete/{id}', 'delete');
});
