<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Storedata;
use App\Http\Controllers\ContinentController;
use App\Http\Controllers\CountrydataEditor;
use App\Http\Controllers\ContinentdataEditor;
use App\Http\Controllers\Deletecountry;
use App\Http\Controllers\Deletecontinent;
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
Route::get('/country_alldata',[Storedata::class, 'alldata']);
Route::post('/countrydata',[Storedata::class, 'storedata'])->name('countrydata');
Route::get('/country_alldata',[Storedata::class, 'countrydata'])->name('countrydata_get');
Route::get('/edit',[Storedata::class, 'editData'])->name('edit');
Route::post('/edit',[CountrydataEditor::class, 'CountryDataEdit'])->name('edit');
Route::get('/deletecountry',[Deletecountry::class, 'deletecountry'])->name('deletecountry');
// Continent routes
Route::get('/continent',[Controller::class, 'continentform']);
Route::get('/continentdata',[Storedata::class, 'continentData'])->name('continent_alldata');
Route::post('/continentform',[ContinentController::class, 'continentformdata'])->name('continentformdata');
Route::get('/continenteditform',[ContinentdataEditor::class, 'editcontinentData'])->name('continenteditform');
Route::post('/continenteditedform',[ContinentdataEditor::class, 'ContinentDataedited'])->name('continentformdata');
Route::get('/deletecontinent',[Deletecontinent::class, 'deletecontinent'])->name('deletecontinent');