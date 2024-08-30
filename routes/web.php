<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index']);
Route::get('create', [ContactController::class, 'create']);
Route::get('details/{contact}', [ContactController::class, 'details']);
Route::get('edit/{Contacts}', [ContactController::class, 'edit']);
Route::post('update/{Contacts}', [ContactController::class, 'update']);
Route::post('store_data', [ContactController::class, 'store']);
Route::get('delete/{Contacts}', [ContactController::class, 'delete']);