<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// In routes/api.php
use App\Http\Controllers\Api\TestimonialController;

Route::get('/testimonials', [TestimonialController::class, 'index']);
