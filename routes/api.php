<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\curlTestController;
use App\Http\Controllers\mpesaPaymentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get list of meetings.
Route::get('/meetings', 'Zoom\MeetingController@list');

// Create meeting room using topic, agenda, start_time.
//Route::post('/updateMeeting', [\App\Http\Controllers\zoomController::class,"updateMeeting"]);
Route::post('/updateMeeting', [\App\Http\Controllers\zoomController::class,"update"]);
Route::post('/meetings', [\App\Http\Controllers\zoomController::class,"creaeZoomMeetingx"]);
//Route::post('/meetings', [\App\Http\Controllers\zoomController::class,"create"]);

// Get information of the meeting room by ID.
Route::get('/meetings/{id}', 'Zoom\MeetingController@get')->where('id', '[0-9]+');
Route::patch('/meetings/{id}', 'Zoom\MeetingController@update')->where('id', '[0-9]+');
Route::delete('/meetings/{id}', 'Zoom\MeetingController@delete')->where('id', '[0-9]+');

Route::post('/testcurl', [curlTestController::class,"testCurlCalls"]);
Route::post('/mpesaresponse', [mpesaPaymentController::class,"mpesaCallback"]);
//Route::post('/callback', [mpesaPaymentController::class,"mpesaCallbackFromAnotherServer"]);
