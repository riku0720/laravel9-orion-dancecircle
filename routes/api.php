<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;
//use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommetsController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\UserRolesController;
use App\Http\Controllers\RoleUsersController;
use App\Http\Controllers\TeamUsersController;
use App\Http\Controllers\PostTagsController;
use App\Http\Controllers\TagPostsController;
use App\Http\Controllers\PostImagesController;


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

//Orion::resource('posts', PostsController::class);
Orion::resource('commets', CommetsController::class);
Orion::hasManyResource('users', 'posts', UserPostController::class);
Orion::belongsToResource('posts', 'users', UserPostController::class);
Orion::belongsToManyResource('roles' ,'users',  RoleUsersController::class);
Orion::belongsToManyResource('users' , 'roles', UserRolesController::class);
Orion::belongsToManyResource('teams', 'users', TeamUsersController::class);
Orion::belongsToManyResource('users', 'teams', TeamUsersController::class);
Orion::hasManyThroughResource('posts', 'tags', PostTagsController::class);
Orion::belongsToResource('tags', 'posts', PostTagsController::class);
Orion::hasManyResource('posts', 'images', PostImagesController::class);
//Orion::belongsToResource('images', 'posts', PostImagesController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
