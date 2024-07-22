<?php

use App\Http\Controllers\Api\EventController;
use \App\Http\Controllers\Api\AttendeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API routes are here
Route::apiResource('events', EventController::class);
Route::apiResource('events.attebdees', AttendeeController::class)
    ->scoped(['attendee' => 'event']);
