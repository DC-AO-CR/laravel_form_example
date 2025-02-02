<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return Redirect::route('student.toAll');
});

# Show routes
Route::get('/students', [StudentController::class, 'showAll'])->name('student.toAll');
Route::get('/students/{id}', [StudentController::class, 'showSingle'])->name('student.toSingle');

# Create routes
Route::get('/students/create', [StudentController::class, 'showCreateForm'])->name('student.showCreateForm');
Route::post('/students', [StudentController::class, 'createSingle'])->name('student.toCreate');

# Delete routes
Route::get('/students/delete/{id}', [StudentController::class, 'showDeleteForm'])->name('student.showDeleteForm');
Route::delete('/students/{id}', [StudentController::class, 'deleteSingle'])->name('student.toDelete');

# Update routes
Route::get('/students/update/{id}', [StudentController::class, 'showUpdateForm'])->name('student.showUpdateForm');
Route::put('/students/{id}', [StudentController::class, 'updateSingle'])->name('student.toUpdate');