<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/welcome', function () {
//    return view('welcome');
//});
//
//
//Route::get('/', function () {
//    return view('index');
//});
//
//Route::get('/post', function () {
//    return view('post');
//});

route::get('/', [PostController::class, 'index']);
route::get('/post/{post_id}', [PostController::class, 'getPost']);
route::get('/create/post', [PostController::class, 'createPostView']);

route::post('/create/post', [PostController::class, 'store']);

