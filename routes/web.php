<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/resume', [PageController::class, 'resume']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/projects', [ProjectController::class, 'index']);
