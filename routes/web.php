<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ChartController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\StoreController;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(StoreController::class)->group(function () {
    Route::get('/', [StoreController::class, 'index'])->name('shop');
});
Route::controller(CartController::class)->group(function(){
    Route::post('/carrinho', [CartController::class, 'store'])->name('cart.store');
    Route::get('/carrinho', [CartController::class, 'index'])->name('cart.index');
});

require __DIR__.'/auth.php';
