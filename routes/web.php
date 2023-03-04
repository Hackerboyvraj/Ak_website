<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntkController;
use App\Http\Controllers\contactController;

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
    return view('Home');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/product', function () {
    return view('product');
})->name('product');
Route::get('/about', function () {
    return view('about');
})->name('about');
// Route::get('/OurWork', function () {
//     return view('OurWork');
// })->name('OurWork');
Route::get('/mobcontact', function () {
    return view('mobcontact');
})->name('mobcontact');
Route::get('/Footer', function () {
    return view('Footer');
})->name('FOOTER');
Route::post('/contact', 'App\Http\Controllers\contactController@contactcreate');
Route::get('/OurWork', 'App\Http\Controllers\OurWorkController@getOurWork')->name('OurWork');
