<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\StatesController;

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

Route::get('/', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');


Route::resource('cities', CitiesController::class)->middleware('auth');
Route::get('citiesPermissions',[CitiesController::class,'Permissions'])->middleware('auth');

Route::resource('countries', CountriesController::class)->middleware('auth');
Route::get('countryPermissions',[CountriesController::class,'Permissions'])->middleware('auth');

Route::resource('states', StatesController::class)->middleware('auth');
Route::get('statesPermissions',[StatesController::class,'Permissions'])->middleware('auth');
// select //
Route::get('selectCountries', [CountriesController::class,'FillSelectCountries'])->middleware('auth');
Route::get('selectCities/{state_id}/{country_id}', [CitiesController::class,'FillSelectCities'])->middleware('auth');
Route::get('selectStates/{country_id}', [StatesController::class,'FillSelectStates'])->middleware('auth');

Route::get('/logout', function () {
    return redirect('login')->with(Auth::logout());;
});
