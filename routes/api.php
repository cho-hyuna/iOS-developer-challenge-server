<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NoteController;

Route::post('/notes', [NoteController::class, 'store'])
->middleware('auth.token');

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok'
    ]);
});