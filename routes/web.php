<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'showAll']);

Route::get('/students/{id}', [StudentController::class, 'showSingle']);

Route::post('/students', [StudentController::class, 'createSingle'])->name('students.toCreate');


Route::get('/students/create', [StudentController::class, 'showCreateForm'])->name('students.toCreateForm');
