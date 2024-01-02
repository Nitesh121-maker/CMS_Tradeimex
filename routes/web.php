<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Storedata;
use App\Http\Controllers\ContinentController;
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


Route::get('/',[Controller::class, 'index']);
Route::get('/country',[Controller::class, 'countryform']);
Route::get('/continent',[Controller::class, 'continentform']);
Route::get('/country_alldata',[Storedata::class, 'alldata']);
Route::post('/countrydata',[Storedata::class, 'storedata'])->name('countrydata');
Route::get('/country_alldata',[Storedata::class, 'countrydata'])->name('countrydata_get');
Route::get('/continentdata',[Storedata::class, 'continentData'])->name('continent_alldata');
Route::post('/continentform',[ContinentController::class, 'continentformdata'])->name('continentformdata');
Route::post('/edit',[Storedata::class, 'editData'])->name('edit');