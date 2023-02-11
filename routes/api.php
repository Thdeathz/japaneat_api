<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
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

// Users
Route::group(['prefix' => 'user'], function () {
    Route::get('/point/{id}', [AuthController::class, 'getCurrentPoint']);
    Route::post('/point/{id}', [AuthController::class, 'usePoint']);
    Route::get('/achievements/{id}', [AuthController::class, 'getAchievements']);
    Route::get('/ranking', [AchievementController::class, 'getUserRanking']);
});

// Video_details
Route::resource('video_details', VideoDetailController::class);

// Record_details
Route::resource('record_details', RecordDetailController::class);
Route::group(['prefix' => 'record_details'], function () {
    Route::get('/teacher/{teacher_id}', [RecordDetailController::class, 'getRecordByTeacherId']);
    Route::get('/student/{student_id}', [RecordDetailController::class, 'getRecordByStudentId']);
});

// feedback
Route::resource('feedback', FeedbackController::class);

// achievements
Route::resource('achievements', AchievementController::class);
