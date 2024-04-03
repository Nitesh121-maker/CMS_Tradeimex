<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Storedata;
use App\Http\Controllers\ContinentController;
use App\Http\Controllers\CountrydataEditor;
use App\Http\Controllers\ContinentdataEditor;
use App\Http\Controllers\Deletecountry;
use App\Http\Controllers\Deletecontinent;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilterController;
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


// Route::get('/',[Controller::class, 'index']);

Route::middleware('auth')->group(function () {
    // Protected routes that require authentication
    Route::get('/',[Controller::class, 'dashboard'])->name('dashboard');
});

Route::get('/tradeimex-cms-login',[AuthController::class, 'login'])->name('login');
Route::get('/tradeimex-cms-add-user',[AuthController::class, 'register']);
Route::get('/country',[Controller::class, 'countryform']);
Route::get('/country_alldata',[Storedata::class, 'alldata']);
Route::post('/countrydata',[Storedata::class, 'storedata'])->name('countrydata');
Route::get('/country_alldata',[Storedata::class, 'countrydata'])->name('countrydata_get');
Route::get('/filtered-country',[FilterController::class, 'Filterdata'])->name('filter');
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

Route::post('/registeradmin',[AuthController::class,'adduser'])->name('add-admin');
Route::post('/loginadmin',[AuthController::class,'checkUser'])->name('login-admin');