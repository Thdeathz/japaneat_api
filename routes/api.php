<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecordDetailController;
use App\Http\Controllers\VideoDetailController;
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

Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/refresh', [AuthController::class, 'refresh']);
Route::get('/me', [AuthController::class, 'me']);

// Video_details
Route::resource('video_details', VideoDetailController::class);

// Record_details
Route::resource('record_details', RecordDetailController::class);
