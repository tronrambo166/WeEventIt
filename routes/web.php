<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\testController;

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


//ADMIN ROUTES

//Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
  //All the admin routes will be defined here...
//});
Route::get('admin', 'AdminController@dashboard');
Route::get('admin/login', 'AdminController@login')->name('login');
Route::get('admin/profile', 'AdminController@profile')->name('profile');
Route::get('admin/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('admin/editprofile', 'AdminController@editprofile')->name('editprofile');
Route::get('admin/add-product', 'AdminController@addproduct')->name('addproduct');

Route::get('admin/manage-product', 'AdminController@manpro')->name('manpro');
Route::get('admin/edit-product/{id}', 'AdminController@editpro');//->name('editpro');
Route::post('admin/uppro/{id}', 'AdminController@uppro')->name('uppro');
Route::post('admin/save-product', 'AdminController@saveproduct')->name('saveproduct');

Route::post('/delcats', 'AdminController@delcats');//->name('delcat');
Route::get('/delpro/{id}', 'AdminController@delpro');//->name('delpro');
Route::get('/productStatus/{id}/{status}', 'AdminController@productStatus');////->name('changeStatus');

//POST Methods/Form submit (Add, Edit, Update,Delete(GET))
Route::post('admin/login', 'AdminController@adminLogin')->name('admin/login');
Route::post('admin/logout', 'AdminController@adminLogout')->name('admin/logout');


//MAIN

Route::get('/', 'PagesController@home'); 
Route::get('/home', 'PagesController@home'); 
Route::get('forgot/{remail}', 'testController@forgot')->name('forgot');
Route::post('send_reset_email', 'testController@send_reset_email')->name('send_reset_email');
Route::post('reset/{remail}', 'testController@reset')->name('reset');

Route::get('{/anypath}', 'PagesController@home')->where('path', '.*');
//Route::get('admin/{anypath}', 'AdminController@dashboard')->where('path', '.*');

Auth::routes();
Route::get('/details/{id}', 'AdminController@editpro');
Route::get('profile/{id}', 'PagesController@profile');
Route::post('profile/edit/{id}', 'PagesController@updateProfile');


Route::get('/clear', function() {
   \Artisan::call('config:cache');
    \Artisan::call('view:clear');
    \Artisan::call('route:clear');
    dd("Cache is cleared");
});
