<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/home', 'HomeController@index')->name('home');

    
//Authentication Rotes
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

        // Logout
        $this->post('logout', 'Auth\LoginController@logout')->name('logout');

        // Users
        $this->get('users', 'UserController@index')->name('users.index');
        $this->get('users/destroy/{id}', 'UserController@destroy')->name('users.destroy')->where('id', '[0-9]+');
        $this->get('users/show/{id}', 'UserController@showUsers')->name('users.showusers')->where('id','[0-9]+');
        $this->put('users/edit/{id}', 'UserController@edit')->name('users.edit')->where('id','[0-9]+');

        // Vehicles
        $this->get('users/vehicles/addvehicles/{id}', 'VehicleController@addVehicles')->name('vehicles.addvehicles')->where('id','[0-9]+');
        $this->post('users/vehicles/addvehicles/{id}/add','VehicleController@add')->name('vehicles.addvehicles.add')->where('id','[0-9]+');
        $this->put('users/vehicles/editvehicles/{id_vehicle}/edit','VehicleController@edit')->name('vehicles.editvehicles.edit')->where('id_vehicle','[0-9]+'); 
        $this->get('users/vehicles/editvehicles/{id_vehicle}','vehicleController@editVehicles')->name('vehicles.editVehicles')->where('id_vehicle','[0-9]+');
        $this->get('users/vehicles/editvehicles/{id_vehicle}/destroy','vehicleController@destroy')->name('vehicles.destroy')->where('id_vehicle','[0-9]+');

        //Password Reset
        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        $this->post('password/reset', 'Auth\ResetPasswordController@reset');

        Route::get('/home', 'HomeController@index')->name('home');
    });
});