<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\SubmitProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)
    ->name('home');

Route::get('/projects', ProjectsController::class)
    ->name('projects');

Route::get('/submit-project', [SubmitProjectController::class, 'index'])
    ->name('submit_project');

Route::post('/submit-project', [SubmitProjectController::class, 'handle'])
    ->name('submit_project_handle');

Route::get('/{project:slug}', ProjectController::class)
    ->name('project');

Route::get('/category/{category:slug}', ProjectCategoryController::class)
    ->name('project_category');
