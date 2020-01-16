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
    Route::put('/search_database/{id}','Admin\DatabaseController@post_index_db')->name('post_index_db');
    Route::get('/dashboard/admin/database/store/{id}','Admin\DatabaseController@create_data')->name('db.create.data');
    Route::put('/dashboard/admin/database/store/{id}','Admin\DatabaseController@store_data')->name('db.store.data');
    
    Route::resource('/dashboard/admin/table','Admin\TableController');
    Route::put('/search_table/{id}','Admin\TableController@post_index_table')->name('post_index_table');
    Route::get('/dashboard/admin/table/store/{id}','Admin\TableController@create_data')->name('table.create.data');
    Route::put('/dashboard/admin/table/store/{id}','Admin\TableController@store_data')->name('table.store.data');
    Route::get('/dashboard/admin/table/back/{id}','Admin\TableController@back')->name('table.back');

    Route::get('/dashboard/admin/isitable/create/{id}','Admin\IsiController@create')->name('isi.create');
    Route::put('/dashboard/admin/isitable/store/{id}','Admin\IsiController@store')->name('isi.store');
    
});   

