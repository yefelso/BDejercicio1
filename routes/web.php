<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


use App\Http\Controllers\AlumnoController;

// returns the home page with all posts
Route::get('/', AlumnoController::class .'@index')->name('posts.index');
// returns the form for adding a post
Route::get('/posts/create', AlumnoController::class . '@create')->name('posts.create');
// adds a post to the database
Route::post('/posts', AlumnoController::class .'@store')->name('alumnos.store');
// returns a page that shows a full post
Route::get('/posts/{post}', AlumnoController::class .'@show')->name('alumnos.show');
// returns the form for editing a post
Route::get('/posts/{post}/edit', AlumnoController::class .'@edit')->name('alumnos.edit');
// updates a post
Route::put('/posts/{post}', AlumnoController::class .'@update')->name('alumnos.update');
// deletes a post
Route::delete('/posts/{post}', AlumnoController::class .'@destroy')->name('alumnos.destroy');