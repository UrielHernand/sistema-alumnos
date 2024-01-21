<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController; //importar el controlador
use App\Http\controllers\MaestroController;
use App\Http\controllers\HomeController;

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
    return view('auth.login');
}); 
/*  Route::get('/', function () {
    return view('alumno.index');
});

Route::get('alumno', function () {
     return view('alumno.index');
 }); */
 
//acceder mediante clases de controlador
Route::resource('alumno', AlumnoController::class)->middleware('auth');

Auth::routes([ 'reset'=>false]);



Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/alumno', [AlumnoController::class, 'index'])->name('home');
    
    Route::get('/maestro', [MaestroController::class, 'index'])->name('home');  
} );
