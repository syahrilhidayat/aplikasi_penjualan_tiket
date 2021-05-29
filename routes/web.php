<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => 'auth'], function () {


    Route::get('/home', 'HomeController@index');


    //Kategori Route
    Route::get('/kategori', 'KategoriController@index');
    Route::get('/kategori/create', 'KategoriController@create');
    Route::post('/kategori/store', 'KategoriController@store');
    Route::get('/kategori/{item:id}/edit', 'KategoriController@edit');
    Route::patch('/kategori/{item:id}/edit', 'KategoriController@update');
    Route::delete('/kategori/{item:id}/delete', 'KategoriController@destroy');
    Route::get('/kategori/import_excel', 'KategoriController@import_excel');
    Route::post('/kategori/import_excel', 'KategoriController@upload_excel');


    //Tiket Route
    Route::get('/tiket', 'TiketController@index');
    Route::get('/tiket/create', 'TiketController@create');
    Route::post('/tiket/store', 'TiketController@store');
    Route::get('/tiket/{item:id}/edit', 'TiketController@edit');
    Route::patch('/tiket/{item:id}/edit', 'TiketController@update');
    Route::delete('/tiket/{item:id}/delete', 'TiketController@destroy');

    //Transaksi Route
    Route::get('/transaksi', 'TransaksiController@index');
    Route::post('/transaksi/store', 'TransaksiController@store');
    Route::get('/transaksi/update', 'TransaksiController@update');
    Route::delete('/transaksi/{item:id}/delete', 'TransaksiController@destroy');

    //Laporan Route
    Route::get('/laporan', 'LaporanController@index');
    Route::get('/laporan/cetak_pdf', 'LaporanController@cetak_pdf');
    Route::get('/laporan/excel', 'LaporanController@cetak_excel');
});
