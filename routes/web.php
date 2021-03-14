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



// Route Grouping

// Route::group(['prefix'=>"account"],function(){
// 	Route::get("/login",function(){
// return "a";
// 	});
// 	Route::get("/logout",function(){
// 		return "a";
// 	});
// 	Route::get("/register",function(){
// 		return "a";
// 	});
// });

// Route Grouping
Route::group(['middleware'=>"language"],function(){

Route::get('/', "SiteController@home");
Route::get('/about', "SiteController@about");
Route::get('/shop', "SiteController@shop");
Route::get('/deals', "SiteController@deals");
Route::get('/contact', "SiteController@contact");
Route::get('/profile/{namevalue}', "SiteController@name");

Route::get("/login","SiteController@login");
Route::post("/login","SiteController@logme");
Route::post("/register","SiteController@regme");
Route::get("/logout","SiteController@logout");
Route::get("/register","SiteController@register");
Route::get("/account","SiteController@account");
Route::get("/language/{name}",function($name){
	setcookie("language", $name, time() + (86400 * 30 *365), "/"); // 86400 = 1 day
	return redirect()->back();
});


Route::get("/make","SiteController@make")->name("dk");

Route::resource('books', Books::class);


Route::group(['middleware'=>'dashboard','prefix'=>'dashboard'], function(){

Route::get('/', "dashboard@index");
});
});
