<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::post('/save-student',[StudentController::class, 'saveStudent']);
Route::post('/get-students',[StudentController::class, 'getStudents']);
Route::post('/delete-student',[StudentController::class, 'deleteStudent']);

Route::get('{any}', function (){
    return view('app');
 })->where('any', '.*');

/*Route::post('/save-carlending',[CarController::class, 'saveCarlending']);
Route::post('/get-carlendings',[CarController::class, 'getCarendings']);
Route::post('/delete-carlending',[CarController::class, 'deleteCarlending']);*/
