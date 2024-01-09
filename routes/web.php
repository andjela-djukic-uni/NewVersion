<?php

use App\Http\Controllers\AdminController;
use App\Models\Projects;
use App\Models\Slides;
use App\Models\Testimonials;
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
    return view('welcome',[
        'slides' => Slides::all(),
        'testimonials' => Testimonials::all(),
        'projects' => Projects::all()
    ]);
})->name('home');

Route::get('/projects', function () {
    return view('projects',[
        'projects' => Projects::all()
    ]);
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login', [\App\Http\Controllers\AuthManager::class, 'login'])->name('login');

Route::post('/login', [\App\Http\Controllers\AuthManager::class, 'loginPost'])->name('login.post');


Route::get('/registration', [\App\Http\Controllers\AuthManager::class, 'registration'])->name('registration');;
Route::post('/registration', [\App\Http\Controllers\AuthManager::class, 'registrationPost'])->name('registration.post');



Route::get('/register', function () {
    return view('register');
});

//Route::get('/update', function () {
//    return view('update');
//})->name('update');

Route::get('/admin/update', [\App\Http\Controllers\AdminController::class, 'index'])->name('update');
Route::post('/admin/update', [\App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');

Route::get('/helpinglocal', function () {
    return view('helpinglocal');
});

Route::get('/supporting', function () {
    return view('supporting');
});

Route::get('/preserving', function () {
    return view('preserving');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/who', function () {
    return view('who');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/singupDODATNO', function () {
    return view('welcome');
});