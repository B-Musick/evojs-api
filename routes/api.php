<?php

use App\Http\Controllers\SequenceController;
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

Route::get('/sequences', [SequenceController::class, 'index']);
Route::post('/sequences', [SequenceController::class, 'store']);
Route::get('/sequences/{id}', [SequenceController::class, 'show']);
Route::put('/sequences/{id}', [SequenceController::class, 'update']);
Route::delete('/sequences/{id}', [SequenceController::class, 'destroy']);
