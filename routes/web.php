<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/{id}', [MovieController::class, 'show']);
Route::post('/movies', [MovieController::class, 'store']);
Route::post('/movies/{id}/broadcasts', [MovieController::class, 'addBroadcast']);
Route::delete('/movies/{id}', [MovieController::class, 'destroy']);
