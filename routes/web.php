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
    return view('home');
})->name('home');




Route::get('search','App\Http\Controllers\ClientController@search')->name('search')->middleware('auth');

Route::resource('frameType','App\Http\Controllers\FrameTypeController')->middleware('auth');

Route::resource('store','App\Http\Controllers\StoreController')->middleware('auth');

Route::put('store/action','App\Http\Controllers\StoreController@action')->name('store.action')->middleware('auth');


Route::group(
    [ 'namespace' => 'App\Http\Controllers'],function() {

    Route::get('client','ClientController@index')->name('client.index')->middleware('auth');
    Route::get('client/show/{id}','ClientController@show')->name('client.show')->middleware('auth');
    Route::get('client/create','ClientController@create')->name('client.create');
    Route::post('client/store','ClientController@store')->name('client.store');
    Route::get('client/edit/{id}','ClientController@edit')->name('client.edit')->middleware('auth');
    Route::patch('client/update/{id}','ClientController@update')->name('client.update')->middleware('auth');
    Route::get('client/destroy/{id}','ClientController@destroy')->name('client.destroy')->middleware('auth');


    // Route::patch('profile/update/{id}', 'ProfileController@update')->name('profile.update');

    ///////////////////////////////

    Route::get('admin/create','AdminController@create')->name('admin.create');
    Route::post('admin/store','AdminController@store')->name('admin.store');


    Route::get('/changePasswordGet','AdminController@changePasswordGet')->name('changePasswordGet')->middleware('auth');
    Route::post('/changePassword','AdminController@changePasswordPost')->name('changePasswordPost')->middleware('auth');

    Route::get('admin/edit','AdminController@edit')->name('admin.edit')->middleware('auth');
    Route::put('admin/update/{id}','AdminController@update')->name('admin.update')->middleware('auth');

    Route::get('/dashboards','AdminController@home')->name('dashboard.index')->middleware('auth');

    Route::post('register', 'Auth\RegisteredUserController@store')->name('register');
    });

require __DIR__.'/auth.php';
