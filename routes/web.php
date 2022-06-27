<?php

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
$menu = config('menu');

Route::get('/', function () use ($menu) {
   
    $data = [
        'menu' => $menu
    ];

    return view('home', $data);
})->name('home');

Route::get('/news', function () use ($menu) {
  
    $data = [
        'menu' => $menu
    ];

    return view('news', $data);
})->name('news');

Route::get('/products', function () use ($menu) {

    $data = [
        'menu' => $menu
    ];

    return view('products', $data);
})->name('products');
