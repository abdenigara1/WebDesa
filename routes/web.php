<?php
use App\Http\Controllers\AuthController;

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
Route::get('about', [Controller::class, 'home'])->name('about');
Route::get('dev', [Controller::class, 'home'])->name('dev');
Route::get('org', [Controller::class, 'home'])->name('org');









Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');



Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/register', [AuthController::class, 'showForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);





