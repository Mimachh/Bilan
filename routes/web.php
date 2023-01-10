<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactController;

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
})->name('/');

Route::get('/test', [TestController::class, 'index'])->name('natalite.index');

Route::resource('contact', ContactController::class)->except('store');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::view('confirmation', 'contact.confirmation')->name('contact.confirmation');
