<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Models\Jumbotron;
use App\Models\Promo;

use App\Http\Controllers\JumbotronController;
use App\Http\Controllers\Promo_kamiController;
use App\Http\Controllers\Tentang_Kami_SectionController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     $jumbotron = Jumbotron::first();
//     $promos = Promo::all();

//     return view('user.beranda.beranda', compact('jumbotron', 'promos'));
// })->name('beranda');

Route::get('/', function () {
    return view('user.beranda.beranda');
})->name('beranda');

Route::get('/tentang-kami', function () {
    return view('user.tentang-kami');
})->name('tentang-kami');

Route::get('/treatment', function () {
    return view('user.treatment');
})->name('treatment');

Route::get('/blog', function () {
    return view('user.blog.blog');
})->name('blog');

Route::get('/blog/id', function () {
    return view('user.blog.blog-detail');
})->name('blog-detail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
        Route::resource('promo_kami', Promo_kamiController::class);
        Route::resource('tentang_kami_section', Tentang_Kami_SectionController::class);

    });

    Route::resource('jumbotron', JumbotronController::class);
});

require __DIR__.'/auth.php';
