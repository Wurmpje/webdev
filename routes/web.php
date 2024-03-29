<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// View gerelateerde routes
Route::get('/', [ViewController::class, 'app']);
Route::get('/app', [ViewController::class, 'app']);
Route::get('/about', [ViewController::class, 'about']); 
Route::get('/registreren', [ViewController::class, 'registreren']);
Route::get('/login', [ViewController::class, 'login']);


// Post | database gerelateerde routes
Route::post('/register', [UserController::class, 'register']);