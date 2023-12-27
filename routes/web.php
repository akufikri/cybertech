<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [frontend\PageController::class, 'gettingStarted']);
Route::prefix('docs')->group(function () {
    Route::get('/auth', [frontend\PageController::class, 'apiAuth']);
    Route::get('/division', [frontend\PageController::class, 'apiDivisi']);
    Route::get('/meeting', [frontend\PageController::class, 'apiMeeting']);
    Route::get('/join-meeting', [frontend\PageController::class, 'apiJoinMeeting']);
});
Route::get('/about', [frontend\PageController::class, 'about']);
