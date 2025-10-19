<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('index');
// });



//Admin routes

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/adminProducts', [AdminController::class, 'products']);
Route::get('/adminProfile', [AdminController::class, 'profile']);

Route::POST('/addNewProduct', [AdminController::class, 'addNewProduct']);




//User routes

Route::get('/', [MainController::class, 'index']);

// Route::post('/register', [MainController::class,'register']);
Route::get('/register', [MainController::class, 'register']);

Route::post('/registerUser', [MainController::class, 'registerUser']);
Route::get('/login', [MainController::class, 'showLogin']); // shows login form

Route::post('/loginUser', [MainController::class, 'loginUser']); // handles login submission
Route::get('/logout', [MainController::class, 'logout']);
