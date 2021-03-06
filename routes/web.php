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
    return view('frontend.index');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Frontend Routes Start
    // Show Category Product Page
    Route::GET('category/post',[
        'uses'   => 'PagesController@showCategoryPostPage',
        'as'     => 'category.post'
    ]);
    // Show Single Post
    Route::GET('single/post',[
        'uses'   => 'PagesController@showSinglePost',
        'as'     => 'single.post'
    ]);
    // Frontend Search Routes
    Route::POST('search/post',[
        'uses'  => 'PagesController@searchPost',
        'as'    =>   'search'
    ]);
    // Sitemap Routes Start
    Route::get('/sitemap.xml', 'SitemapController@index');
    Route::get('/sitemap.xml/post', 'SitemapController@post');
    Route::get('/sitemap.xml/categories', 'SitemapController@categories');
    // Sitemap Routes End
// Frontend Routes End



// Backend Route Start
// Category Routes Start
    // Start Category Routes
    Route::GROUP(['prefix'=>'category', 'as'=>'category.'], function(){
        Route::GET('add',[
            'uses'  => 'Backend\CategoryController@create',
            'as'    => 'add'
        ]);
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
            'as'    => 'show'
        ]);
        Route::POST('update',[
            'uses'  => 'Backend\CategoryController@update',
            'as'    => 'update'
        ]);
        Route::GET('destroy',[
            'uses'  => 'Backend\CategoryController@destroy',
            'as'    => 'destroy'
        ]);
    });
    // End Category Routes
    // Start Slider Routes
    Route::GROUP(['prefix'=>'slider', 'as'=>'slider.'], function(){
        Route::GET('list',[
            'uses'     => 'Backend\SliderController@index',
            'as'       => 'list'
        ]);
        Route::GET('add',[
            'uses'    => 'Backend\SliderController@create',
            'as'      => 'add'
        ]);
        Route::POST('store',[
            'uses'    => 'Backend\SliderController@store',
            'as'      => 'store'
        ]);
        Route::GET('edit',[
            'uses'    => 'Backend\SliderController@edit',
            'as'      => 'edit'
        ]);
        Route::GET('destroy',[
            'uses'    => 'Backend\SliderController@destroy',
            'as'      => 'destroy'
        ]);
        Route::POST('update',[
            'uses'    => 'Backend\SliderController@update',
            'as'      => 'update'
        ]);
    });
    // End Slider Routes
    // Start Post Route
    Route::GROUP(['prefix' => 'post','as' => 'post.'],function(){
        Route::GET('list',[
            'uses'    => 'Backend\PostController@index',
            'as'      => 'list'
        ]);
        Route::GET('add',[
            'uses'    => 'Backend\PostController@create',
            'as'      => 'add'
        ]);
        Route::POST('store',[
            'uses'  => 'Backend\PostController@store',
            'as'    => 'store'
        ]);
        Route::GET('edit',[
            'uses'  => 'Backend\PostController@edit',
            'as'    => 'edit'
        ]);
        Route::POST('update',[
            'uses'  => 'Backend\PostController@update',
            'as'    => 'update'
        ]);
        Route::GET('destroy',[
            'uses'  => 'Backend\PostController@destroy',
            'as'    => 'destroy'
        ]);
    });
    // Start Settings Routes
    Route::Group(['prefix' => 'setting' , 'as' => 'setting.'],function(){
        Route::GET('list',[
            'uses' => 'Backend\SettingController@index',
            'as'   => 'list'
        ]);
        Route::POST('update',[
            'uses'  => 'Backend\SettingController@update',
            'as'    => 'update'
        ]);
        Route::GET('category',[
            'uses'  => 'Backend\SettingController@category',
            'as'    => 'category'
        ]);
        Route::POST('category/store',[
            'uses'  => 'Backend\SettingController@categoryStore',
            'as'    => 'category.store'
        ]);
        Route::POST('category/update',[
            'uses'  => 'Backend\SettingController@categoryUpdate',
            'as'    => 'category.update'
        ]);
        Route::GET('category/destroy',[
            'uses' => 'Backend\SettingController@categoryDestroy',
            'as'   => 'category.destroy'
        ]);
    });
    // End Settings Routes
// Backend Routes End


