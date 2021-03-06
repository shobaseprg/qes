<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\respondentController;

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

Route::get('/', [respondentController::class, 'index']);
Route::get('/show/{user_id}', [respondentController::class, 'show']);
Route::get('/create', [respondentController::class, 'create']);
Route::post('/store', [respondentController::class, 'store']);
