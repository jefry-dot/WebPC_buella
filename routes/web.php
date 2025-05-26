<?php
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuDetailController; // Pastikan controller ini ada!


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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/menu', [MenuController::class, 'index']);



Route::get('/menu/{id}', [MenuController::class, 'show'])->name('menu.show');


