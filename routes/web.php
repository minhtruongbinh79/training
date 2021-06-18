<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CommentsController;

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

Route::get('/', [PostsController::class, 'index']);

Route::get('/search', [SearchController::class, 'index']);

Route::get('/search-params', [SearchController::class, 'index']);

Route::resource('/posts', PostsController::class);

Route::post('/posts/{id}', [PostsController::class, 'addComment'])->name('posts.comment');

Route::get('/viewblade', function () {
    return view('view blade.index');
});

Auth::routes();

