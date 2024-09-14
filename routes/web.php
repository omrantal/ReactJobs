<?php

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit
// update - Update listing
// destroy - Delete listing

// All Jobs
Route::get('/', [JobController::class, 'index']);

// Show Create Form
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');

// Store Job Data
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth');

// Update Job Data
Route::put('/jobs/{job}', [JobController::class, 'update'])->middleware('auth');

// Delete Job
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->middleware('auth');

// Manage Jobs
Route::get('/jobs/manage', [JobController::class, 'manage'])->middleware('auth');

// Single Job
Route::get('/jobs/{job}', [JobController::class, 'show']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


// ->where('id', '[1-' . count(Listing::all()) . ']');

// Route::get('/hello', function() {
//     return response('<h1>Hello World</h1>', 200)
//         ->header('Content-Type', 'text/plain');
// });

// Route::get('/posts/{id}', function($id) {
//     ddd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]');

// Route::get('/search', function(Request $request) {
//     return $request->name . ' ' . $request->city;
// });