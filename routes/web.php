<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return Redirect::route('flow.toAll');
});

# Show routes
Route::get('/students', [StudentController::class, 'showAll'])->name('flow.toAll');
Route::get('/students/{id}', [StudentController::class, 'showSingle'])->name('flow.toSingle');

# Create routes
Route::get('/students/create', [StudentController::class, 'giveCreateForm'])->name('flow.showCreateForm');
Route::post('/students', [StudentController::class, 'createSingle'])->name('flow.toCreate');

# Delete routes
Route::get('/students/delete/{id}', [StudentController::class, 'giveDeleteForm'])->name('flow.showDeleteForm');
Route::delete('/students/{id}', [StudentController::class, 'deleteSingle'])->name('flow.toDelete');

# Update routes
Route::get('/students/update/{id}', [StudentController::class, 'giveUpdateForm'])->name('flow.showUpdateForm');
Route::put('/students/{id}', [StudentController::class, 'updateSingle'])->name('flow.toUpdate');