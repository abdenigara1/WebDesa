<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;

use App\Http\Controllers\Controller;
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
//default 
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('home', [Controller::class, 'home'])->name('home');
Route::get('berita', [Controller::class, 'berita'])->name('berita');
Route::get('organisasi', [Controller::class, 'organisasi'])->name('org');
Route::get('berita/{id}', [Controller::class, 'showBerita'])->name('beritanews');

Route::get('/developer', function () {
    return view('developer');
})->name('developer');

// routes/web.php




Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [MessageController::class, 'store'])->name('message.store');













Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');



Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/register', [AuthController::class, 'showForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);





