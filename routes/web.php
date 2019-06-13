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

// HOME PAGE
Route::get('/', function (){ return view('pages.index'); })->name('home');
Route::get('/home', function (){ return redirect(route('home')); });

/**
 * FRONT CONTROLLERS
 */
Route::namespace('Front')->group(function () {
    Route::resource('heartbeat', 'HeartbeatController')->only([
        'index',
    ]);

});