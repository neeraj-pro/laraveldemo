<?php

use App\Geofence;
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

// Route::get('/home', function () {
//     return redirect('geofence.index');
// });


Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::post('/admin/checklogin', 'AdminController@checklogin')->name('admin.checklogin');
Route::get('/admin/admin_home', 'AdminController@admin_home')->name('admin.admin_home');
Route::get('/admin/add_company', 'AdminController@add_company')->name('admin.add_company');
Route::post('/admin/insert_company', 'AdminController@insert_company');   //->name('admin.insert_company');
Route::get('/admin/add_car', 'AdminController@add_car')->name('admin.add_car');
Route::get('/admin/view_cars', 'AdminController@view_cars')->name('admin.view_cars');
Route::get('/admin/add_user', 'AdminController@add_user')->name('admin.add_user');
Route::get('/admin/view_users', 'AdminController@view_users')->name('admin.view_users');





Route::get('/user/login', 'UserController@login')->name('user.login');
Route::get('/user/register', 'UserController@register')->name('user.register');


Route::get('/geofences', 'GeofenceController@create')->name('geofence.create');
Route::get('/geofences/check', 'GeofenceController@check')->name('geofence.check');
Route::get('/geofences/view', 'GeofenceController@view')->name('geofence.view');
Route::post('/geofences/insert', 'GeofenceController@insert');  //->name('geofence.create');