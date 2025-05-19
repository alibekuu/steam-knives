<?php

use App\Http\Controllers\Api\KnifeController;
use Illuminate\Support\Facades\Route;

Route::get('/knives', [KnifeController::class, 'index']);
