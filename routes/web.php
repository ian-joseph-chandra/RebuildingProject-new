<?php

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\pages\HomeController;
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
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'show'])->name('home');

Route::get('get-involved', function(){
    return view('get-involved');
});

Route::resources([
    'inquiries' => InquiryController::class
]);
