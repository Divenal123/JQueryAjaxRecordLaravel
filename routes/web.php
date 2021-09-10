<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

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


Route::get('ajax/request', [StudentController::class, 'ajaxRequest'])->name('ajax.request');
Route::post('ajax/request/store', [StudentController::class, 'ajaxRequestStore'])->name('ajax.request.store');
