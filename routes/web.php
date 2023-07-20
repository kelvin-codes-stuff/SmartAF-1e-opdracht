<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\fileHandlerController;

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

// Homepage
Route::get('/', [homepageController::class, 'home']);

// File handling
Route::get('/upload-file', [fileHandlerController::class, 'getUploadFile']);
Route::post('/post-upload-file', [fileHandlerController::class, 'postUploadFile']);

Route::get('/verwijder/{fileName}', [fileHandlerController::class, 'deleteFile']);

Route::get('/bewerk/{imgName}', [fileHandlerController::class, 'editFile']);
Route::post('/post-bewerk/{imgName}', [fileHandlerController::class, 'postEditFile']);