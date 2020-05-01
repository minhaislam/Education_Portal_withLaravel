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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('Home');
});
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LogoutController@index')->name('logout.index');
Route::get('/admin', 'AdminController@index')->name('admin.index');


Route::get('/Admin/student', 'AdminController@StudentList')->name('admin.student');
Route::get('/Admin/teacher', 'AdminController@TeacherList')->name('admin.teacher');
Route::get('/Admin/admin', 'AdminController@AdminList')->name('admin.admin');

Route::get('/Admin/addnew', 'AdminController@AddNew')->name('admin.addnew');
Route::post('/Admin/addnew', 'AdminController@InsertNew')->name('admin.insertnew');
Route::get('/Admin/addnew1', 'AdminController@AddNew1')->name('admin.addnew1');
Route::post('/Admin/addnew1', 'AdminController@InsertNew1')->name('admin.insertnew1');
Route::get('/Admin/addnew2', 'AdminController@AddNew2')->name('admin.addnew2');
Route::post('/Admin/addnew2', 'AdminController@InsertNew2')->name('admin.insertnew2');