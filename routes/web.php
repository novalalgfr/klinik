<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Models\Jumbotron;
use App\Models\Promo_kami;
use App\Models\Tentang_Kami_section;
use App\Models\Pelayan_kami;
use App\Models\Blog;
use App\Models\tentang_kami;
use App\Models\treatment;

use App\Http\Controllers\JumbotronController;
use App\Http\Controllers\Promo_kamiController;
use App\Http\Controllers\Tentang_Kami_SectionController;
use App\Http\Controllers\Tentang_KamiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\Pelayan_KamiController;

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

Route::get('/', function () {
    $jumbotron = Jumbotron::first();
    $promos = Promo_kami::all();
    $tentang_kami_sections = Tentang_Kami_section::first();
    $pelayan_kamis = Pelayan_kami::all();
    $blogs = Blog::all();
    $treatments = Treatment::all();

    return view('user.beranda.beranda', compact('jumbotron', 'promos', 'tentang_kami_sections', 'pelayan_kamis','blogs'));
})->name('beranda');

Route::get('/tentang-kami', function () {
    $tentang_kamis = tentang_kami::all();
    return view('user.tentang-kami',compact('tentang_kamis'));
})->name('tentang-kami');

Route::get('/treatment', function () {
    $treatments = Treatment::all();
    return view('user.treatment.treatment', compact('treatments'));
})->name('treatment');

Route::get('/treatment/detail', function () {
    return view('user.treatment.treatment-detail');
})->name('treatment-detail');

Route::get('/blog', function () {
    $blogs = Blog::all();
    return view('user.blog.blog', compact('blogs'));
})->name('blog');

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog-detail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
    Route::resource('jumbotron', JumbotronController::class);
    Route::resource('promo_kami', Promo_kamiController::class);
    Route::resource('tentang_kami', Tentang_KamiController::class);
    Route::resource('tentang_kami_section', Tentang_Kami_SectionController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('treatment', TreatmentController::class);
    Route::resource('pelayan_kami', Pelayan_KamiController::class);
});

require __DIR__.'/auth.php';
