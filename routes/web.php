<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PetitionController;

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
/* Route without controller */
Route::get('/', function () {
    return view('welcome');
})->name('/');

/* FAQ route */
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

/* Petitions routes */
Route::get('/petitions/confirmation', function() { return view('petitions.confirmation'); })->name('petitions.confirmation');
Route::resource('/petitions', PetitionController::class)->except('create');
Route::get('petitions/signature/{petition}', [PetitionController::class, 'create'])->name('petitions.signature');

/* Delete route*/
Route::get('/test', [TestController::class, 'index'])->name('natalite.index');

/* Contact routes */
Route::resource('contact', ContactController::class)->except('store');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::view('confirmation', 'contact.confirmation')->name('contact.confirmation');


/* Admin route */
Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('/admin');