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

Route::get('/colors', function () {
    return view('theme.colors');
})->name('colors');

Route::get('/colors.html', function () {
    return redirect()->route('colors');
});

Route::get('/typography', function () {
    return view('theme.typography');
})->name('typography');

Route::get('/typography.html', function () {
    return redirect()->route('typography');
});

Route::get('/charts', function () {
    return view('components.charts');
})->name('charts');

Route::get('/charts.html', function () {
    return redirect()->route('charts');
});

Route::get('/widgets', function () {
    return view('components.widgets');
})->name('widgets');

Route::get('/widgets.html', function () {
    return redirect()->route('widgets');
});

Route::get('/demo', function () {
    return view('components.demo');
})->name('demo');
