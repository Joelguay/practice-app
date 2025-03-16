<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [StudentController::class, 'index']);
Route::get('deleteStudent/{id}', [StudentController::class, 'deleteStudent'])->name('deleteStudent');
