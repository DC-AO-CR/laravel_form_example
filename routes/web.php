<?php

// What is the flow of a web application?
// Why is it important to have a good flow in a web application?
// What can we tell about the flow of this app by studying the below routes?

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// What will this route do if you visit its URL?
Route::get('/', function () {
    return Redirect::route('flow.toAll');
});

// What is a named route?
// Why are we giving names to our routes?
// How can we refer to these routes in our controllers and our views?

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