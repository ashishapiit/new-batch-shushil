<?php

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

Route::get('/{teacherid}/{encyptid}', 'StudentController@showStudent');
Route::get('/my-company-page', function () {
    return view('student.about-us');
})->name('about-us');
Route::get('/contact-us', function () {
    return view('student.index');
});
Route::get('/services', function () {
    return view('student.index');
});
Route::get('/gallery', function () {
    return view('student.index');
});
