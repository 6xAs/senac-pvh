<?php

use App\Http\Controllers\BannerController;
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

Route::get('/dashboard', function () {
    $name   = 'Prof. Anderson Seixas';
    return view('dashboard', ['name' => $name] );
})->middleware(['auth'])->name('dashboard');

Route::get('/cadastrar-banner', function () {
    return view('cadastrar-banner');
})->middleware(['auth'])->name('cadastrar-banner');

// Rotas do Banner
Route::post('/store-banner', [BannerController::class, 'store'])->middleware(['auth'])->name('store-banner');


require __DIR__.'/auth.php';
