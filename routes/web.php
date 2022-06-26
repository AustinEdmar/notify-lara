<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NotificationController;
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

Route::get('/', function () {
    return view('welcome');
});
/* Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index'); */

Route::resource('posts', PostController::class);
Route::post('/comment', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');




Auth::routes();


Route::get('notifications/{id}', [App\Http\Controllers\NotificationController::class, 'markNotification'])->name('markNotification');

Route::get('/notifications', NotificationController::class)->name('notifications');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
