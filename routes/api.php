<?php

use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\AuthController;
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


Route::post('login', [AuthController::class, 'login']);
Route::post('registers',[AuthController::class,'register']);
 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

});
Route::middleware(['auth:sanctum'])->group(function (): void
{
    Route::get('index',[SkillController::class,'index']);
    Route::post('store',[SkillController::class,'store']);
    Route::get('edit',[SkillController::class,'edit']);
    Route::get('detail',[SkillController::class,'detail']);
});

