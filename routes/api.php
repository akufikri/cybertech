<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JoinMeetingController;
use App\Http\Controllers\MeetingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('signup', [AuthController::class, 'signup']);
Route::post('signin', [AuthController::class, 'signin']);
Route::get('/get/users', [AuthController::class, 'getAllUser']);

// divisi
Route::get('/divisi', [DivisiController::class, 'getDivisi']);
Route::post('/divisi/create', [DivisiController::class, 'createDivisi']);
Route::get('/divisi/{id}', [DivisiController::class, 'getByIdDivisi']);
Route::delete('/divisi/delete/{id}', [DivisiController::class, 'deleteDivisi']);
Route::put('/divisi/update/{id}', [DivisiController::class, 'updateDivisi']);

//meeting pertemuan
Route::get('/meeting', [MeetingController::class, 'getMeeting']);
Route::post('/meeting/create', [MeetingController::class, 'createMeeting']);
Route::get('/meeting/{id}', [MeetingController::class, 'getMeetingById']);
Route::delete('/meeting/delete/{id}', [MeetingController::class, 'deleteMeeting']);
Route::put('/meeting/update/{id}', [MeetingController::class, 'updateMeeting']);

// join meeting
Route::get('/join', [JoinMeetingController::class, 'getMeetingAfterJoin']);
Route::post('/join', [JoinMeetingController::class, 'processJoinMeeting']);
