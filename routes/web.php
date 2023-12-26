<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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


Route::get('/welcome.blade.php', function () {
    return view('welcome');
})->name('home')
;


Route::get('/login', [\App\Http\Controllers\AuthManager::class, 'login'])->name('login');

Route::post('/login', [\App\Http\Controllers\AuthManager::class, 'loginPost'])->name('login.post');


Route::get('/registration', [\App\Http\Controllers\AuthManager::class, 'registration'])->name('registration');;
Route::post('/registration', [\App\Http\Controllers\AuthManager::class, 'registrationPost'])->name('registration.post');



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
