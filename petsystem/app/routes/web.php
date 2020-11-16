<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
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

//home-index
Route::get('/', function () {
    //return view('welcome');
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});


//appointment data
Route::resource('appointment', 'App\Http\Controllers\AppointmentController');
Route::get('/checkappointment', 'App\Http\Controllers\AppointmentController@index');

//medicalrecord
Route::resource('medicalrecords', 'App\Http\Controllers\MedicalRecordController');

Route::get('/medicalrecordshow', 'App\Http\Controllers\MedicalRecordController@index');
Route::get('/medicalrecordshow/fetch_image/{id}','App\Http\Controllers\MedicalRecordController@fetch_image');

Route::get('/checkmedicalrecord', 'App\Http\Controllers\MedicalRecordController@usercheck');
Route::get('/checkmedicalrecord/fetch_image/{id}','App\Http\Controllers\MedicalRecordController@fetch_image');

//user
Route::get('/service', 'App\Http\Controllers\UserController@service');

Route::get('/appointment/create', 'App\Http\Controllers\DynamicDependentcityhospital@index');

Route::post('/appointment/create/fetch', 'App\Http\Controllers\DynamicDependentcityhospital@fetch')->name('dynamicdependent.fetch');

//admin
//Route::get('/adminhome','App\Http\Controllers\AdminHomeController@index')->name('index');
Route::get('/adminhome','App\Http\Controllers\adminController@adminhome')->name('admin');
Route::get('/testhome','App\Http\Controllers\AdminHomeController@test')->name('testhome');
Route::get('/EMRS_home','App\Http\Controllers\AdminHomeController@EMRS')->name('EMRS');
Route::get('/MAS_home','App\Http\Controllers\AdminHomeController@MAS')->name('MAS');
Route::get('/MMS_home','App\Http\Controllers\AdminHomeController@MMS')->name('MMS');
Route::get('/PGMS_home','App\Http\Controllers\AdminHomeController@PGMS')->name('PGMS');

//Comments
Route::resource('posts','App\Http\Controllers\PostController');
Route::get('/showposts', 'App\Http\Controllers\PostController@index');
Route::resource('comments', 'App\Http\Controllers\CommentsController');


//Route::post('comments/{post_id}',['user' => 'App\Http\Controllers\CommentsController@store','as'=>'comments.store']);


Auth::routes();



Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user');
Route::get('/admin', 'App\Http\Controllers\adminController@index')->name('admin');

Auth::routes();
