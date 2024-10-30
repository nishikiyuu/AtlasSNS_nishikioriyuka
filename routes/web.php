<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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



require __DIR__ . '/auth.php';

Route::get('top', [PostsController::class, 'index']);

//投稿
Route::post('post/create', [PostsController::class, 'postCreate']);

Route::get('profile', [ProfileController::class, 'profile']);

Route::get('search', [UsersController::class, 'index']);

Route::get('follow-list', [PostsController::class, 'index']);
Route::get('follower-list', [PostsController::class, 'index']);

//logout
    Route::get('logout', [AuthenticatedSessionController::class, 'logout'])
                ->name('logout');
