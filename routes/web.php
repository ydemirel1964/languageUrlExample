<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => '{lang}', 'where' => ['lang' => 'en|tr']], function () {
    Route::get('/', function ($lang) {
        App::setLocale($lang);
        return view("$lang.welcome");
    })->name('home');
    Route::get('/about', function () {
        return view("$lang.about");
    })->name('about');

});
