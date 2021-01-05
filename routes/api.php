<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// to create a resource in laravel eg. posts
// 1. create DB adn migrations
// 2. create a model
// 3. create controller to fetch data from DB
// 4. return the info

// CRUD
// 1. get all (GET) /api/posts

Route::get('/posts', function() {
});

// 2. add a single (POST) /api/posts
// 3. get a single (GET) /api/posts/{id}
// 4. update a single (PUT/PATCH) /api/posts/{id}
// 5. delete a single (DELETE) /api/posts/{id}


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
