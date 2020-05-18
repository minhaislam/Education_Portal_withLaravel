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

Route::group(['middleware'=> ['sess']], function(){


Route::get('/Admin', 'AdminController@index')->name('admin.index');
Route::get('/Admin/student', 'AdminController@StudentList')->name('admin.student');
Route::get('/Admin/teacher', 'AdminController@TeacherList')->name('admin.teacher');
Route::get('/Admin/admin', 'AdminController@AdminList')->name('admin.admin');

Route::get('/Admin/addnew', 'AdminController@AddNew')->name('admin.addnew');
Route::post('/Admin/addnew', 'AdminController@InsertNew')->name('admin.insertnew');
Route::get('/Admin/addnew1', 'AdminController@AddNew1')->name('admin.addnew1');
Route::post('/Admin/addnew1', 'AdminController@InsertNew1')->name('admin.insertnew1');
Route::get('/Admin/addnew2', 'AdminController@AddNew2')->name('admin.addnew2');
Route::post('/Admin/addnew2', 'AdminController@InsertNew2')->name('admin.insertnew2');

Route::get('/Admin/edit/{id}', 'AdminController@edit')->name('admin.edit');
Route::post('/Admin/edit/{id}', 'AdminController@confirmedit');
Route::get('/Admin/delete/{id}', 'AdminController@delete')->name('admin.delete');

Route::post('/Admin/delete/{id}', 'AdminController@confirmdelete')->name('admin.confirmdelete');

Route::get('/Admin/edit1/{id}', 'AdminController@edit1')->name('admin.edit1');
Route::post('/Admin/edit1/{id}', 'AdminController@confirmedit1');
Route::get('/Admin/delete1/{id}', 'AdminController@delete1')->name('admin.delete1');

Route::post('/Admin/delete1/{id}', 'AdminController@confirmdelete1')->name('admin.confirmdelete1');


Route::get('/Admin/edit2/{id}', 'AdminController@edit2')->name('admin.edit2');
Route::post('/Admin/edit2/{id}', 'AdminController@confirmedit2');
Route::get('/Admin/delete2/{id}', 'AdminController@delete2')->name('admin.delete2');

Route::post('/Admin/delete2/{id}', 'AdminController@confirmdelete2')->name('admin.confirmdelete2');
Route::get('/Admin/changepass', 'AdminController@changepass')->name('admin.changepass');
Route::post('/Admin/changepass', 'AdminController@confirmpass');

Route::get('/Admin/profile/{id}', 'AdminController@profile')->name('admin.profile');
Route::get('/Admin/editprofile/{id}', 'AdminController@editprofile')->name('admin.editprofile');
Route::post('/Admin/editprofile/{id}', 'AdminController@editconfirm');

Route::get('/Admin/searchresult', 'AdminController@search')->name('admin.searchresult');

//Teacher

Route::get('teacher/', 'TeacherController@index')->name('teacher.index');
Route::resource('teacher/students','StudentsController',['as'=>'teacher']);
Route::resource('teacher/courses','CoursesController',['as'=>'teacher']);
Route::resource('teacher/notices','NoticesController',['as'=>'teacher']);
Route::resource('teacher/notes','NotesController',['as'=>'teacher']);
Route::resource('teacher/profile','ProfileController',['as'=>'teacher']);
});
