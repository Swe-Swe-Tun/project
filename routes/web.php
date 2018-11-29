<?php

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

Route::get('user/register','Auth\RegisterController@show');
Route::post('user/register','Auth\RegisterController@register');

Route::get('user/logout','Auth\LoginController@logout');
Route::get("user/login",'Auth\LoginController@show');
Route::post("user/login",'Auth\LoginController@login');

Route::get('user/profile','Admin\ProfileController@show');
Route::get('user/profile/{id}/edit','Admin\ProfileController@edit');
Route::post('user/profile/{id}/edit','Admin\ProfileController@update');

//Route::get('post/create','Post\PostController@create');

//Route::get('admin/all','Admin\ProfileController@all');
//Route::get('admin/{id}/all','Admin\ProfileController@ban');
//Route::get('admin/gallery/home','Admin\GalleryController@index');
//Route::get('admin/gallery/create','Admin\GalleryController@create');
//Route::post('admin/gallery/create','Admin\GalleryController@store');

Route::get('/home','PageController@home');

Route::group(['middleware'=>'auth'],function (){
    Route::post('comment/create', 'CommentController@store');
});



Route::group(["prefix"=>"admin","namespace"=>"Admin","middleware"=>"admin"],function(){
    Route::get('all','ProfileController@all');
    Route::get('{id}/all','ProfileController@ban');


    Route::get('gallery/home','GalleryController@index');
    Route::get('gallery/create','GalleryController@create');
    Route::post('gallery/create','GalleryController@store');

    Route::get('roles','RoleController@index');
//    Route::get('roles','RoleController@create');
    Route::post('roles','RoleController@store');
    Route::get('{id}/edit','RoleController@edit');
    Route::post('{id}/edit','RoleController@update');

    Route::get('permission','PermissionController@index');
    Route::get('permission/create','PermissionController@create');
    Route::post('permission/create','PermissionController@store');

    Route::get('/dashboard','AdminController@index');

    Route::get('category','CategoryController@index');
    Route::get('category/create','CategoryController@create');
    Route::post('category/create','CategoryController@store');
    Route::get('allcategory','CategoryController@show');
    Route::get('category/{id}/edit','CategoryController@edit');
    Route::post('category/{id}/edit','CategoryController@update');


});

Route::group(['prefix'=>'post','namespace'=>'Post','middleware'=>'post'],function(){
        Route::get('create','PostController@create');
        Route::post('create','PostController@store');
        Route::get('allpost','PostController@index');
        Route::get('/{id}/edit','PostController@edit');
        Route::post('/{id}/edit','PostController@update');
        Route::get('/{id}/show','PostController@show');
});




