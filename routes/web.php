<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

# Show routes
Route::get('/students', [StudentController::class, 'showAll']);
Route::get('/students/{id}', [StudentController::class, 'showSingle']);

# Create routes
Route::get('/students/create', [StudentController::class, 'showCreateForm']);
Route::post('/students', [StudentController::class, 'createSingle'])->name('students.toCreate');

# Delete routes
Route::get('/students/delete/{id}', [StudentController::class, 'showDeleteForm']);
Route::delete('/students/{id}', [StudentController::class, 'deleteSingle'])->name('student.toDelete');

# Update routes
Route::get('/students/update/{id}', [StudentController::class, 'showUpdateForm']);
Route::put('/students/{id}', [StudentController::class, 'updateSingle'])->name('student.toUpdate');