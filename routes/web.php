<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
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
})->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get(
    '/contact',
    [HomeController::class, 'contact']
)->name('contact');

Route::post(
    '/insert',
    [HomeController::class, 'insert']
)->name('insert');

Route::get(
    '/read',
    [HomeController::class, 'read']
)->name('read');

Route::get(
    '/single/{listdata}',
    [HomeController::class, 'single']
)->name('single');

Route::get(
    '/update/{listdata}',
    [HomeController::class, 'updateView']
)->name('update');

Route::post(
    '/update/{listdata}',
    [HomeController::class, 'update']
)->name('update');

Route::get(
    '/delete/{listdata}',
    [HomeController::class, 'delete']
)->name('delete');

// CReate, Read, Update, Delete

// route params
Route::get('/profile/{username}', [HomeController::class, 'profile'])->name('profile');

Route::get('/redirect', function () {
    return redirect()->route('contact');
});
