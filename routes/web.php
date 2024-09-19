<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index']);
Route::get('create', [ContactController::class, 'create']);
Route::get('details/{contact}', [ContactController::class, 'details']);
Route::get('details/edit/{contact}', [ContactController::class, 'edit']);
Route::post('update/{contact}', [ContactController::class, 'update']);
Route::post('store_data', [ContactController::class, 'store']);
Route::get('details/delete/{contact}', [ContactController::class, 'delete']);
Route::get('/search',[ContactController::class, 'search']);
Route::get('/signup',[UserController::class, 'signup']);
Route::get('user',[UserController::class,'user']);
Route::post('user_data',[UserController::class,'userdata']);
Route::get('user/details/{user}',[UserController::class,'userdetails']);
Route::get('user/details/edit/{user}', [UserController::class, 'edituser']);
Route::post('update/{user}', [UserController::class, 'userupdate']);
//To Do Authentication
#Auth::routes();