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

Route::get('/', "SiteController@home");
Route::get('/about', "SiteController@blog");
Route::get('/contact', "SiteController@contact");
Route::get('/shop', "SiteController@shop");
Route::get('/profile/{namevalue}', "SiteController@name");


// Route Grouping

Route::group(['prefix'=>"account"],function(){
	Route::get("/login",function(){
return "a";
	});
	Route::get("/logout",function(){
		return "a";
	});
	Route::get("/register",function(){
		return "a";
	});
});

Route::get("/make","SiteController@make")->name("dk");