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

Route::get('/admin', function () {
    return view('admin.home');
})->name('admin');

Route::get('/admin.html', function () {
    return redirect()->route('admin');
});

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('admin');
});

Route::get('/index', function () {
    return redirect()->route('admin');
});

Route::get('/index.html', function () {
    return redirect()->route('admin');
});

Route::get('/typography', function () {
    return view('admin.typography');
})->name('typography');

Route::get('/typography.html', function () {
    return redirect()->route('typography');
});
