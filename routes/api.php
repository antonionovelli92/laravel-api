<?php

use App\Http\Controllers\Api\ProjectController;
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


// ! Tutte le nostre rotte hanno 'api/' davanti
// lista dei miei progetti

Route::apiResource('projects', ProjectController::class);

// Rotta per il dettaglio del singolo progetto
Route::get('/projects/{project}', [ProjectController::class, 'show']);
