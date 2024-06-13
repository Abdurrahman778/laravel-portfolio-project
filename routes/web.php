<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProjectController;

Route::get('/', [PortofolioController::class, 'home']);
Route::get('/about', [PortofolioController::class, 'about']);
Route::get('/project', [PortofolioController::class, 'project']);
Route::get('/contact', [PortofolioController::class, 'contact']);


Route::get('/project/project-1', [ProjectController::class, 'project_1']);

