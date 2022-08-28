<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommetsController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\RoleUsersController;
use App\Http\Controllers\TeamUsersController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Orion::resource('posts', PostsController::class);
Orion::resource('commets', CommetsController::class);
Orion::hasManyResource('users', 'posts', UserPostController::class);
Orion::belongsToManyResource('users', 'roles' , RoleUsersController::class);
Orion::hasManyResource('teams', 'users', TeamUsersController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
