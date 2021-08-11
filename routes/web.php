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

Route::get('/pizzas', function () {
    $pizzas = [
        ['type' => 'thin crust' , 'base' => 'cheesy'],
        ['type' => 'thick crust' , 'base' => 'mushrooms']
    ];
    return view('pizzas', ['pizzas' => $pizzas]);
});

Route::get('/add-student',[StudentController::class,'addstudent'])->name('student.add');
Route::post('/add-student',[StudentController::class,'savestudent'])->name('save.student');
Route::get('/student-list',[StudentController::class,'studentslist'])->name('student.list');