<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*================== HOME PAGE ==================*/
Route::get('/','CategoriesController@index');
/*================== CATEGORIES MENU ==================*/
Route::get('categories/{id}','CategoriesController@Categories');
/*================== PRODUCT ROUTE ==================*/
Route::get('products','ProductsController@Products');
Route::get('products','ProductsController@Products');
Route::get('products/detail/{product_id}','ProductsController@ProductsDetail');
Route::get('products/{categories_id}/{trademark_id}','ProductsController@ProductsTrademark');
/*================== LIVESEARCH ROUTE ==================*/
Route::get('livesearch/{keywork}','ProductsController@LiveSearch');
/*================== LOGIN ROUTE ==================*/
/*================== ADMINISTRATOR ROUTE ==================*/
Route::get('dashboard','DashboardController@Index');
Route::post('dashboard/login','UserController@Login');
Route::get('dashboard/manager/admin','UserController@ManagerAdmin');
Route::get('dashboard/manager/member','UserController@ManagerMember');



