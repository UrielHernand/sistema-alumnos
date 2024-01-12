<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController; //importar el controlador
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

/* Route::get('/', function () {
    return view('welcome');
}); */

/*  Route::get('/', function () {
    return view('alumno.index');
});

Route::get('alumno', function () {
     return view('alumno.index');
 }); */
 
//acceder mediante clases de controlador
Route::resource('alumno', AlumnoController::class);
