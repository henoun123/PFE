<?php
use Illuminate\Support\Facades\Route;
// use Auth;

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

/*
 --------------------------------------------------------------------------
                            front end
 --------------------------------------------------------------------------
*/

Route::get('/dashbord', [App\Http\Controllers\HomeController::class, 'dashbord'])->name('dashbord');

/*
 --------------------------------------------------------------------------
                          patient
 --------------------------------------------------------------------------
*/

Route::resource('patient', 'PatientController');
/*
 --------------------------------------------------------------------------
                          Service
 --------------------------------------------------------------------------
*/
Route::resource('service', 'ServiceController');

Route::resource('medecin', 'MedecinController');

Route::resource('rendevou','RendevouController');  

Route::resource('patologie', 'PatologieController');

Route::resource('examen', 'ExamenController');

Route::resource('medicament', 'MedicamentController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashbord'])->name('home');

Route::get('/home', function () {
    return view('Backend.dashbord');
})->name('dashbord');