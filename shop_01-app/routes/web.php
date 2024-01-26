<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ImageController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [Controller::class, 'index']);

Route::post('/form-submit', [Controller::class, 'formData']);

Route::get('/form', [Controller::class, 'getForm']);

Route::get('/index', [Controller::class, 'getIndex']);

Route::get('/get-form', [Controller::class, 'getFormView']);

Route::post('sent-data', [Controller::class, 'processedData']);

Route::resource('tasks', TaskController::class);

Route::resource('images', ImageController::class);
