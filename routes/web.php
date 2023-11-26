<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
// Route::group(["middleware"=>"auth"],function() {
//     Route::post('/loginCheck', 'LoginController@loginCheck')->name('loginCheck');
//     });



Route::group(["namespace"=>"App\Http\Controllers","middleware"=>"AuthLogCheck"],function() {
    

    
    Route::post('/loginCheck', 'LoginController@loginCheck')->name('loginCheck');

    Route::get('/logout', 'LoginController@logout')->name('LogOut');

    Route::get('/dashboard', function () {    return view('welcome');})->name('dashboard');
    Route::get('/get-weather-data','weatherController@index')->name('getWeatherData');
    Route::get('/get-weather','weatherController@getIntialData')->name('getInformation');
    

});

 Route::post('/loginCheck', 'App\Http\Controllers\LoginController@loginCheck')->name('loginCheck');

 Route::get('/', function () {
    return view('components.login');
});