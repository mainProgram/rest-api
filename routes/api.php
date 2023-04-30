<?php

use App\Http\Controllers\Api\V1\SkillController;
use App\Http\Controllers\TacheController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "v1"], function(){
    Route::apiResource("skills", SkillController::class);
    Route::apiResource("todos", TacheController::class);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
