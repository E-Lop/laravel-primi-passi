<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', ['name'=> 'Edmondo']);
})->name('home',);

Route::get('/chi-siamo', function () {
    return view('about');
})->name('about');
Route::get('/progetti', function () {
    return view('projects');
})->name('projects');
Route::get('/risorse', function () {
    return view('tools');
})->name('tools');
