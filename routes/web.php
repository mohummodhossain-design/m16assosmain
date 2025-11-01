<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return  "allah malik";
// });
Route::get('/', [HomeController::class,"index"]);
Route::get('/resume', [HomeController::class,"resume"]);
Route::get('/contact', [HomeController::class,"contact"]);
Route::get('/projects', [HomeController::class,"projects"]);
