<?php

use App\Http\Controllers\Student\LoginController;
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
    return view('welcome');
});

// Route::get('/student/login', [LoginController::class, 'authenticate'])
//     ->name('student.login');

Route::get('/student/login', function () {
    return view('auth.login');
});

Route::post('/student/login', [LoginController::class, 'authenticate'])
    ->name('student.login');


Route::get('/student/dashboard', fn () => view('students.dashboard'));

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
});

require __DIR__ . '/auth.php';
