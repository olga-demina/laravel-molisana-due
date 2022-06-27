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
$data = [
    'menu' => $menu
];

Route::get('/', function () use ($data) {

    return view('home', $data);
})->name('home');

Route::get('/news', function () use ($data) {

    return view('news', $data);
})->name('news');

Route::get('/products', function () use ($data) {
    $pasta = config('pasta');

    // Esempio con la classe Collection di Laravel
    $pasta_collection = collect($pasta);
    $pasta_lunga = $pasta_collection->filter(function ($pasta_item) {
        return $pasta_item['tipo'] === 'lunga';
    });
    $pasta_corta = $pasta_collection->filter(function ($pasta_item) {
        return $pasta_item['tipo'] === 'corta';
    });
    $pasta_cortissima = $pasta_collection->where('tipo', 'cortissima');

    $data = array_merge($data, [
        'pasta_lunga' => $pasta_lunga,
        'pasta_corta' => $pasta_corta,
        'pasta_cortissima' => $pasta_cortissima
    ]);

    return view('products', $data);
})->name('products');

Route::get('/products/{id}', function ($id) use ($data) {
    $pasta = collect(config('pasta'));
    $current_pasta = $pasta->where('id', $id)->first();

    if (!$current_pasta) {
        return abort(404);
    }

    $data = array_merge($data, [
        'pasta' => $current_pasta
    ]);
    return view('single-product', $data);
})->name('single-product');
