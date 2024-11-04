<?php

use App\Http\Controllers\ChamadaController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// Importando CatFactsController
use App\Http\Controllers\CatFactsController;

Route::apiResource('cats', CatFactsController::class);

Route::apiResource('students', StudentsController::class);

Route::apiResource('chamada', ChamadaController::class);

Route::apiResource('posts', PostsController::class);