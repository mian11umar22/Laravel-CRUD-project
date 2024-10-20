<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;


Route::get('contact',[ContactController::class, 'show'])->name('contact');
Route::get('contact/{id}',[ContactController::class, 'SingleContact'])->name('contact.single');
Route::get('delete/{id}',[ContactController::class, 'Delete'])->name('contact.delete');
Route::view('newcontact','/AddContact');
Route::post('add',[ContactController::class, 'Add'])->name('contact.add');
Route::get('update/{id}',[ContactController::class, 'UpdateSingle'])->name('single.contact');
Route::post('update/{id}',[ContactController::class, 'Update'])->name('update.contact');
Route::resource('student',StudentController::class);
