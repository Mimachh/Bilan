<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\TestimonialController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:1'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    /* Admin route */
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('/admin');

});

require __DIR__.'/auth.php';

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

/* Contact routes */
Route::resource('contact', ContactController::class)->except('store');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::view('confirmation', 'contact.confirmation')->name('contact.confirmation');

/* Statistiques routes */

Route::prefix('statistiques')->group(function () {
    Route::get('/immigration', function () { return view('stats.migration'); })->name('stats.migration');
    Route::get('/economie', function () { return view('stats.economie'); })->name('stats.economie');
    Route::get('/violences', function () { return view('stats.violences'); })->name('stats.violences');
});


/* Golden book */
Route::resource('/temoignages', TestimonialController::class);

Route::prefix('/temoignages')->group(function () {
    Route::view('confirmation', 'testimonials.confirmation')->name('testimonials.confirmation');
    Route::get('/', [TestimonialController::class, 'create'])->name('testimonials.create');
    Route::POST('/', [TestimonialController::class, 'store'])->name('testimonials.store');
});
