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

Route::group(['middleware'=>'auth','namespace'=>'App\Http\Controllers'],function(){
    Route::resource('users','UsersController');
    Route::resource('roles/admin','RolesAdminController');
    //Route::get('admin/rol','RolesAdminController@indexAdmin')->name('roles.index');
    Route::get('admin/rol','RolesAdminController@indexRoles')->name('roles.index');
    Route::post('admin/rol/store','RolesAdminController@storeRoles');

    //Route::get('task/delete/{task}','TasksController@destroy')->name('tasks.destroy');
});

