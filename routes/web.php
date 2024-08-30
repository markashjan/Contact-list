<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index']);
Route::get('create', [ContactController::class, 'create']);
Route::get('details/{contact}', [ContactController::class, 'details']);
Route::get('details/edit/{contact}', [ContactController::class, 'edit']);
Route::post('update/{contact}', [ContactController::class, 'update']);
Route::post('store_data', [ContactController::class, 'store']);
Route::get('delete/{contact}', [ContactController::class, 'delete']);