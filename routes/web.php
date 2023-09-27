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
    return view('home');
});

Route::get('/home' , function () {
    return view('home');
});

Route::get('/profil' , function () {
    return view('profil',[
        "nama" => "Stefanus Vemas Aditya Mahardika",
        "alamat" => "Condong Catur, Depok, Sleman",
        "email" => "210711398@students.uajy.ac.id",
        "telepon" => "08123456789",
        "hobi" => "Makan"
    ]);
});