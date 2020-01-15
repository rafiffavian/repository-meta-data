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

Route::get('/', 'User\LoginController@index');
Route::resource('/login','User\LoginController');

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard/admin/user-table','Admin\AdminController@index')->name('admin.user.table');
    Route::get('/dashboard/admin/user-create','Admin\AdminController@create')->name('admin.user.create');
    Route::post('/dashboard/admin/user-store','Admin\AdminController@store')->name('admin.user.store');

    Route::get('/dashboard/admin/role-table','Admin\RoleController@index')->name('admin.role.table');
    Route::get('/dashboard/admin/role-create','Admin\RoleController@create')->name('admin.role.create');
    Route::post('/dashboard/admin/role-store','Admin\RoleController@store')->name('admin.role.store');

    Route::resource('/dashboard/admin/sim','Admin\SimController');
    Route::post('/search_sim','Admin\SimController@post_index')->name('post_index');

    Route::resource('/dashboard/admin/database','Admin\DatabaseController');
    
    Route::resource('/dashboard/admin/table','Admin\TableController');

    Route::get('/dashboard/admin/isitable/create/{id}','Admin\IsiController@create')->name('isi.create');
    Route::put('/dashboard/admin/isitable/store/{id}','Admin\IsiController@store')->name('isi.store');
});   

