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

Route::get('/dash', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('orders', function () {
    return view('orders');
})->name('orders');

Route::get('products', function () {
    return view('products');
})->name('products');

Route::get('product-detail', function () {
    return view('product-detail');
})->name('product-detail');

Route::get('chat', function () {
    return view('chat');
})->name('chat');

Route::get('mail', function () {
    return view('mail');
})->name('mail');

Route::get('todo-list', function () {
    return view('todo-list');
})->name('todo-list');

Route::get('file-manager', function () {
    return view('file-manager');
})->name('file-manager');

Route::get('calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('invoice', function () {
    return view('invoice');
})->name('invoice');

// User

Route::get('users', function () {
    return view('users');
})->name('users');

Route::get('settings', function () {
    return view('settings');
})->name('settings');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('recovery-password', function () {
    return view('recovery-password');
})->name('recovery-password');

Route::get('lock-screen', function () {
    return view('lock-screen');
})->name('lock-screen');

Route::get('profile', function () {
    return view('profile');
})->name('profile');

// Basic Components

Route::get('alert', function () {
    return view('alert');
})->name('alert');

Route::get('accordion', function () {
    return view('accordion');
})->name('accordion');

Route::get('buttons', function () {
    return view('buttons');
})->name('buttons');

Route::get('dropdown', function () {
    return view('dropdown');
})->name('dropdown');

Route::get('list-group', function () {
    return view('list-group');
})->name('list-group');

Route::get('pagination', function () {
    return view('pagination');
})->name('pagination');

Route::get('typography', function () {
    return view('typography');
})->name('typography');

Route::get('media-object', function () {
    return view('media-object');
})->name('media-object');

Route::get('progress', function () {
    return view('progress');
})->name('progress');

Route::get('modal', function () {
    return view('modal');
})->name('modal');

Route::get('spinners', function () {
    return view('spinners');
})->name('spinners');

Route::get('navs', function () {
    return view('navs');
})->name('navs');

Route::get('tab', function () {
    return view('tab');
})->name('tab');

Route::get('tooltip', function () {
    return view('tooltip');
})->name('tooltip');

Route::get('popovers', function () {
    return view('popovers');
})->name('popovers');

// Cards

Route::get('basic-cards', function () {
    return view('basic-cards');
})->name('basic-cards');

Route::get('image-cards', function () {
    return view('image-cards');
})->name('image-cards');

Route::get('scroll-cards', function () {
    return view('scroll-cards');
})->name('scroll-cards');

Route::get('other-cards', function () {
    return view('other-cards');
})->name('other-cards');

// Tables

Route::get('basic-tables', function () {
    return view('basic-tables');
})->name('basic-tables');

Route::get('dataTable', function () {
    return view('dataTable');
})->name('dataTable');

Route::get('responsive-tables', function () {
    return view('responsive-tables');
})->name('responsive-tables');

// Charts

Route::get('apexchart', function () {
    return view('apexchart');
})->name('apexchart');

Route::get('chartjs', function () {
    return view('chartjs');
})->name('chartjs');

Route::get('justgage', function () {
    return view('justgage');
})->name('justgage');

Route::get('morsis', function () {
    return view('morsis');
})->name('morsis');

Route::get('peity', function () {
    return view('peity');
})->name('peity');

// Maps

Route::get('google-map', function () {
    return view('google-map');
})->name('google-map');

Route::get('vector-map', function () {
    return view('vector-map');
})->name('vector-map');

// Other Components

Route::get('avatar', function () {
    return view('avatar');
})->name('avatar');

Route::get('icons', function () {
    return view('icons');
})->name('icons');

Route::get('colors', function () {
    return view('colors');
})->name('colors');

// Forms

Route::get('basic-forms', function () {
    return view('basic-forms');
})->name('basic-forms');

Route::get('custom-forms', function () {
    return view('custom-forms');
})->name('custom-forms');

Route::get('advanced-forms', function () {
    return view('advanced-forms');
})->name('advanced-forms');

Route::get('form-validation', function () {
    return view('form-validation');
})->name('form-validation');

Route::get('form-wizard', function () {
    return view('form-wizard');
})->name('form-wizard');

Route::get('form-repeater', function () {
    return view('form-repeater');
})->name('form-repeater');

Route::get('file-upload', function () {
    return view('file-upload');
})->name('file-upload');

Route::get('ckeditor', function () {
    return view('ckeditor');
})->name('ckeditor');

Route::get('datepicker', function () {
    return view('datepicker');
})->name('datepicker');

Route::get('timepicker', function () {
    return view('timepicker');
})->name('timepicker');

Route::get('colorpicker', function () {
    return view('colorpicker');
})->name('colorpicker');

// Plugins

Route::get('sweet-alert', function () {
    return view('sweet-alert');
})->name('sweet-alert');

Route::get('lightbox', function () {
    return view('lightbox');
})->name('lightbox');

Route::get('toast', function () {
    return view('toast');
})->name('toast');

Route::get('tour', function () {
    return view('tour');
})->name('tour');

Route::get('slick-slide', function () {
    return view('slick-slide');
})->name('slick-slide');

Route::get('nestable', function () {
    return view('nestable');
})->name('nestable');

// Pages

Route::get('timeline', function () {
    return view('timeline');
})->name('timeline');

Route::get('pricing-table', function () {
    return view('pricing-table');
})->name('pricing-table');

Route::get('pricing-table-2', function () {
    return view('pricing-table-2');
})->name('pricing-table-2');

Route::get('search-result', function () {
    return view('search-result');
})->name('search-result');

Route::get('blank-page', function () {
    return view('blank-page');
})->name('blank-page');

Route::get('mailing', function () {
    return view('mailing');
})->name('mailing');

Route::get('404', function () {
    return view('404');
})->name('404');

Route::get('mean-at-work', function () {
    return view('mean-at-work');
})->name('mean-at-work');

Route::get('email-template-basic', function () {
    return view('email-template-basic');
})->name('email-template-basic');

Route::get('email-template-alert', function () {
    return view('email-template-alert');
})->name('email-template-alert');

Route::get('email-template-billing', function () {
    return view('email-template-billing');
})->name('email-template-billing');







Route::get('/', function () {
    return view('index');
});
Route::get('/Barcode/Scanner', function () {
    return view('barcode.barcode_scanner');
});

//Route::get('barcode', 'Controller@barcode');
//customer
Route::get('/Customer',\App\Http\Controllers\CustomerController::class . '@index');
Route::get('/Customer/TambahCus1',\App\Http\Controllers\CustomerController::class . '@create');
Route::get('/Customer/TambahCus2',\App\Http\Controllers\CustomerController::class . '@create2');
Route::post('/Customer/SaveCus1',\App\Http\Controllers\CustomerController::class . '@store');
Route::post('/Customer/SaveCus2',\App\Http\Controllers\CustomerController::class . '@store2');

//data kota sesuai provinsi yang dipilih
Route::post('/Customer/data-kota',\App\Http\Controllers\CustomerController::class . '@kota');

//data kecamatan sesuai kota yang dipilih
Route::post('/Customer/data-kecamatan',\App\Http\Controllers\CustomerController::class . '@kecamatan');

//data kelurahan sesuai kecamatan yang dipilih
Route::post('/Customer/data-kelurahan',\App\Http\Controllers\CustomerController::class . '@kelurahan');

//Bacode
Route::get('/Barcode',\App\Http\Controllers\BarcodeController::class . '@barcode');
Route::get('/Barcode/Print',\App\Http\Controllers\BarcodeController::class . '@printBarcode');
Route::get('/Barcode/Scanner',\App\Http\Controllers\BarcodeController::class . '@scannerBarcode');
Route::post('/Barang',\App\Http\Controllers\BarcodeController::class . '@create');

//Toko
Route::get('/Toko/List_Toko',\App\Http\Controllers\LokasiTokoController::class . '@index');

//Titik Awal
Route::get('/Toko/InputAwal',\App\Http\Controllers\LokasiTokoController::class . '@TitikAwal');
Route::post('/Toko/InputTitikAwal/Save',\App\Http\Controllers\LokasiTokoController::class . '@save');

//Titik Kunjungan
//scanner
Route::get('/Toko/InputKunjungan',\App\Http\Controllers\LokasiTokoController::class . '@TitikKunjung');
//Barcode data nama toko
Route::post('/Toko/req-nama-toko',\App\Http\Controllers\LokasiTokoController::class . '@getNamaToko');

//cobakk
Route::get('/Toko/Coba',\App\Http\Controllers\LokasiTokoController::class . '@coba');

//cetak barcode toko
Route::get('/Toko/List_Toko/Cetak/{id}',\App\Http\Controllers\LokasiTokoController::class . '@cetak');

//Login Goolge
Route::get('/logingoogle',\App\Http\Controllers\LogingoogleController::class . '@index');

//excel
Route::get('/customer/export_excel', \App\Http\Controllers\CustomerController::class . '@export_excel');
Route::post('/customer/import_excel', \App\Http\Controllers\CustomerController::class . '@import_excel');

//Scoreboard
Route::get('/scoreboard', App\Http\Controllers\ScoreBoardController::class . '@scoreboard_index');
Route::get('/scoreboard-controller', App\Http\Controllers\ScoreBoardController::class . '@controller_index');
Route::post('/scoreboard-controller/update', App\Http\Controllers\ScoreBoardController::class . '@controller_store');

Route::get('/messages', App\Http\Controllers\ScoreBoardController::class . '@message');

//Film
Route::get('/film', App\Http\Controllers\FilmController::class . '@index');
Route::post('addreview', App\Http\Controllers\FilmController::class . '@addreview');
Route::post('addfilm', App\Http\Controllers\FilmController::class . '@addfilm');
Route::post('/editfilm/{id}',App\Http\Controllers\FilmController::class . '@updatefilm');
Route::delete('/deletereview/{id}',App\Http\Controllers\FilmController::class . '@destroyreview');