<?php

use App\Http\Controllers\HouseController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ************ HOUSE CONTROLLERS********** //

// Home page
Route::get('/', [HouseController::class, 'index']);

// About page
Route::get('/about', [HouseController::class, 'about']);

// Show properties page
Route::get('/properties', [HouseController::class, 'properties'])->name('properties');
Route::get('/properties/search', [HouseController::class, 'properties'])->name('properties.search');

// Contact Page
Route::get('/contact', [HouseController::class, 'contact']);

// Show Create Page
Route::get('/create', [HouseController::class, 'create']);

// Store House
Route::post('/houses', [HouseController::class, 'store']);

// Show Edit page
Route::get('/houses/{house}/edit', [HouseController::class, 'edit']);

// Update House
Route::put('/houses/{house}', [HouseController::class, 'update']);

// Delete House
Route::delete('/houses/{house}', [HouseController::class, 'destroy']);

// Manage Houses
Route::get('/houses/manage', [HouseController::class, 'manage']);

// Show a single house
Route::get('/houses/{house}', [HouseController::class, 'show']);



// ************ USER CONTROLLERS********** //

// Show User registration page
Route::get('/register', [UserController::class, 'register']);

// Handle User registration
Route::post('/users', [UserController::class, 'store']);

// Logout User
Route::post('/logout', [UserController::class, 'logout']);

// Show Login page
Route::get('/login', [UserController::class, 'login'])->name('login');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
