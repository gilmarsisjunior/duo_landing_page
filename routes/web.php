<?php

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
    return view('home.home');
});
Route::get('/catalogos', function () {
    return view('catalogos.catalogos');
});
Route::get('/flyers', function () {
    return view('catalogos.catalogos-flyers');
});
Route::get('/arquivos', function () {
    return view('catalogos.files');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/create', [App\Http\Controllers\Contacts\ContactsController::class, 'store'])->name('home');
