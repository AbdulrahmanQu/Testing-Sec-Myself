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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons');
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	//Cards
    Route::get('total_accounts', function () {return view('Cards_view.total_accounts');})->name('total_accounts');
    Route::get('total_pam_accounts', function () {return view('Cards_view.total_pam_accounts');})->name('total_pam_accounts');
    Route::get('total_production_servers', function () {return view('Cards_view.total_production_servers');})->name('total_production_servers');
    Route::get('servers_without_pam', function () {return view('Cards_view.servers_without_pam');})->name('servers_without_pam');


    //Sections
    Route::get('section/Infrastructure', function () {return view('Cards_view.total_production_servers');})->name('section/Infrastructure');



    Route::get('NCA_Requiremnts/nca', function () {return view('NCA_Requiremnts.NCA');})->name('nca');

});

