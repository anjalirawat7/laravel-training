<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;

// use App\Http\Controllers\SidebarController;


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


Route::get('/users',[App\Http\Controllers\UserController::class,'index']);
Route::post('/user/save',[App\Http\Controllers\UserController::class,'store']);

Route::get('/form',[App\Http\Controllers\PostController::class,'index']);
Route::post('/store-form',[App\Http\Controllers\PostController::class,'store']);

Route::get('/admin',[App\Http\Controllers\AdminController::class,'index']);
Route::get('/list',[App\Http\Controllers\AdminController::class,'show']);
Route::get('/delete/{id}',[App\Http\Controllers\AdminController::class,'destroy']);





// Route::get('/form', function () {
//     return view('new');
// })->name('form');

// Route::post('/save', function () {
//    echo "test";
// })->name('save');

// Route::post('/save', function (Request $request) {
//     dd($request->all());
// });



