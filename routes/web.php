<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\ArchivoController;
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

Route::post('app/newArchivo', [ArchivoController::class, 'addArchivo']);

Route::post('app/createArchivo', [TestController::class, 'controllerMethod']);


Route::get('/', function () {
    return view('welcome');
});
Route::get('{any}', function () {
    return view('welcome');
});

Route::get('/new', [TestController::class, 'controllerMethod']);

Route::any('{slug}', function () {
    return view('welcome');
});
