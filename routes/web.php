<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'LoginController@index')->named('home');
Route::get('/migrasi-pit/pdf', ['as' => 'siup_migrasi_pdf', 'uses' => 'SIUPController@siup_migrasi_pdf']);
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
