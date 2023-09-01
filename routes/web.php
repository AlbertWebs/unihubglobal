<?php

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
    return view('front.index');
});
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/study-abroad', [App\Http\Controllers\StudyController::class, 'index'])->name('study-aborad');
Route::get('/study-abroad/{slung}', [App\Http\Controllers\StudyController::class, 'show'])->name('show-study-aborad');
Route::get('/study-abroad/{country}/{slung}', [App\Http\Controllers\StudyController::class, 'show_apply'])->name('show-study-aborad-apply');

