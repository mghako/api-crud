<?php

use App\Http\Controllers\Api\V1\Posts\CreateController;
use App\Http\Controllers\API\V1\Posts\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('posts')->name('posts:')->group(function() {
    Route::get('/', IndexController::class)->name('all');
    Route::post('create', CreateController::class);
});
