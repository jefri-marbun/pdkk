<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\Uses;

Route::post('/upload-file', ['as'=> 'uploadFile', 'uses'=>'SIUPController@uploadFile']);
Route::post('/submit-form', ['as'=> 'submitForm', 'uses'=>'SIUPController@submitForm']);
// Route::post('/update-alokasi', ['as'=>'updateAlokasi', 'uses'=>'SIUPController@updateAlokasi']);
// Route::put('/update-alokasi1/{idalokasi}', ['as' => 'updateAlokasi1', 'uses' => 'SIUPController@updateAlokasi']);



Route::get('/', 'LoginController@index')->named('home');
Route::get('/migrasi-pit/pdf', ['as' => 'siup_migrasi_pdf', 'uses' => 'SIUPController@siup_migrasi_pdf']);
Route::get('/migrasi-pit/menu', ['as' => 'menu_utama', 'uses' => 'SIUPController@menu_utama']);
Route::get('/migrasi-pit/sertifikat', ['as' => 'sertifikat_kuota', 'uses' => 'SIUPController@sertifikat_kuota']);
Route::get('/migrasi-pit/pdf_sertifikat', ['as' => 'sertifikat_pdf', 'uses' => 'SIUPController@sertifikat_pdf']);

// Login
Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@index']);
Route::post('/do_login', ['as' => 'do_login', 'uses' => 'LoginController@do_login']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);

// SIDEBAR MENU
// Dashboard
Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index'])->middleware('web');

// SIUP
Route::prefix('/siup')->group(function () {
    // SIUP Migrasi PIT
    // Route::get('/migrasi-pit/{id?}', ['as' => 'siup_migrasi_pit', 'uses' => 'SIUPController@siup_migrasi_pit'])->middleware('web');
    Route::get('/migrasi-pit', ['as' => 'siup_migrasi_pit', 'uses' => 'SIUPController@siup_migrasi_pit'])->middleware('web');
    Route::get('/migrasi-pit/{operation}/{id?}', ['as' => 'siup_migrasi_pit_operation', 'uses' => 'SIUPController@siup_migrasi_pit_operation'])->middleware('web');
    Route::post('/migrasi-pit/action/{action}/{id?}', ['as' => 'siup_migrasi_pit_action', 'uses' => 'SIUPController@siup_migrasi_pit_action'])->middleware('web');
    
   
});
