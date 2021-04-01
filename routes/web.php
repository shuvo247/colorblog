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

// Backend Route Start

// Category Routes Start
    // Start Category Routes
    Route::group(['prefix'=>'category', 'as'=>'category.'], function(){
        Route::GET('list', [
            'uses'  =>'Backend\CategoryController@index',
            'as'    =>'list'
        ]);
        Route::POST('store',[
            'uses'  => 'Backend\CategoryController@store',
            'as'    => 'store'
        ]);
        Route::GET('show',[
            'uses'  => 'Backend\CategoryController@show',
            'as'     => 'show'
        ]);
        Route::POST('update',[
            'uses'   => 'Backend\CategoryController@update',
            'as'     => 'update'
        ]);
        Route::GET('destroy',[
            'uses'   => 'Backend\CategoryController@destroy',
            'as'     => 'destroy'
        ]);
    });
    // End Category Routes
    // Start Slider Routes
    Route::GET('')
    // End Slider Routes
// Category Routes End

