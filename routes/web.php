<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    //Parameter 1 = URL
    //Parameter 2 = Controller
    //Parameter 3 = Method
Route::get('/home',[HomeController::class 'home']);
   

//Jalur Route Ke Halaman About Us
Route::get('/About Us',function () {
Return 'About Us';
});

//Jalur Route Ke Halaman Contact
Route::get('/Contact', function () {
    return 'Contact';
});

