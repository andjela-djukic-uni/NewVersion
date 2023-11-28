<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects.php', function () {
    return view('projects');
});

Route::get('/gallery.php', function () {
    return view('gallery');
});

Route::get('/about.php', function () {
    return view('about');
});

Route::get('/contact.php', function () {
    return view('contact');
});

Route::get('/login.php', function () {
    return view('login');
});

Route::get('/welcome.blade.php', function () {
    return view('welcome');
});

Route::get('/register.php', function () {
    return view('register');
});

Route::get('/helpinglocal.php', function () {
    return view('helpinglocal');
});

Route::get('/supporting.php', function () {
    return view('supporting');
});

Route::get('/preserving.php', function () {
    return view('preserving');
});

Route::get('/education.php', function () {
    return view('education');
});

Route::get('/who.php', function () {
    return view('who');
});

Route::get('/testimonials.php', function () {
    return view('testimonials');
});

Route::get('/singupDODATNO.php', function () {
    return view('welcome.blade');
});