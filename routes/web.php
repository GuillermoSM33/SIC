<?php

use Illuminate\Support\Facades\Route;
//use  App\Http\Controllers\Student\StudentController;
use  App\Http\Controllers\StudentController;


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

Route::get('/', function () {
    return view('formulario');
});

//Route::get('/alumnos', [StudentController:: class, 'index']);

//Cambia para almacenar a store

//Route::post('/alumnos', [StudentController:: class, 'store']);

Route::resource('estudiantes', StudentController::class);
