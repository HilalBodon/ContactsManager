<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ContactController;
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


Route::post('/add-contact',[ContactController::class,'store']);
Route::get('/contacts',[ContactController::class,'index']);
// Route::get('/edit-contact/{id}', [ContactController::class, 'edit']);
// Route::put('/update-contact/{id}', [ContactController::class, 'update']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
