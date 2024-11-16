<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FollowsController;
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
Route::post('/post/create', [PostsController::class, 'postCreate']);

Route::get('profile', [ProfileController::class, 'profile'])
                ->name('profile');

Route::get('/search', [UsersController::class, 'search'])
                ->name('search');
//class:index

Route::get('/follow-list', [FollowsController::class, 'FollowsController'])
                ->name('follow-list');
Route::get('/follower-list', [FollowsController::class, 'followerList'])
                ->name('follower-list');

//logout
    Route::get('logout', [AuthenticatedSessionController::class, 'logout'])
                ->name('logout');
