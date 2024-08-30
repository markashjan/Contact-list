<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index']);
Route::get('create', [ContactController::class, 'create']);
Route::get('details/{contact}', [ContactController::class, 'details']);
Route::get('details/edit/{contact}', [ContactController::class, 'edit']);
Route::post('update/{contact}', [ContactController::class, 'update']);
Route::post('store_data', [ContactController::class, 'store']);
Route::get('details/delete/{contact}', [ContactController::class, 'delete']);
Route::get('search',[ContactController::class, 'search']);
//To Do Authentication
#Auth::routes();