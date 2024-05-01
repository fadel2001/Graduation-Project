<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\CategoriesController;
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


Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/services', 'services')->name('services');
    Route::get('/destinations', 'destinations')->name('destinations');
    Route::get('/packages', 'packages')->name('packages');
    Route::get('/booking', 'booking')->name('booking');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/singleBlog', 'singleBlog')->name('singleBlog');
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
});

Route::controller(CategoriesController::class)->name('categories.')->group(function () {
    Route::get('/adventure', 'adventure')->name('adventure');
    Route::get('/beach', 'beach')->name('beach');
    Route::get('/cultural', 'cultural')->name('cultural');
    Route::get('/historical', 'historical')->name('historical');
    Route::get('/religious', 'religious')->name('religious');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
