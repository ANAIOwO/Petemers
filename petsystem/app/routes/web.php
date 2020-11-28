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

Route::get('/introduce', function () {
    return view('user/introduce');
});


//appointment data
Route::resource('appointment', 'App\Http\Controllers\AppointmentController');
Route::get('/checkappointment', 'App\Http\Controllers\AppointmentController@index');
Route::get('/appointmentcreate', 'App\Http\Controllers\AppointmentController@create');
//medicalrecord
Route::resource('medicalrecords', 'App\Http\Controllers\MedicalRecordController');
Route::get('/checktreatment', 'App\Http\Controllers\TreatmentController@usercheck');

Route::get('/medicalrecordshow', 'App\Http\Controllers\MedicalRecordController@index');
Route::get('/medicalrecordshow/fetch_image/{id}','App\Http\Controllers\MedicalRecordController@fetch_image');

/*
Route::get('/checkmedicalrecord', 'App\Http\Controllers\MedicalRecordController@usercheck');
Route::get('/checkmedicalrecord/fetch_image/{id}','App\Http\Controllers\MedicalRecordController@fetch_image');
*/
//user
Route::get('/service', 'App\Http\Controllers\UserController@service');

Route::get('/appointmentcreate', 'App\Http\Controllers\DynamicDependentcityhospital@index');


Route::post('/appointmentcreate/fetch', 'App\Http\Controllers\DynamicDependentcityhospital@fetch')->name('dynamicdependent.fetch');

//treatment
Route::resource('treatments', 'App\Http\Controllers\TreatmentController');
Route::get('treatmentdata/{userphonenumber}/{mrnumber}','App\Http\Controllers\adminController@treatmentdata')->name('treatmentdata');
Route::delete('treatmentsdelete/{id}/{userphonenumber}/{mrnumber}', 'App\Http\Controllers\TreatmentController@destroy')->name('destroy');
Route::patch('treatmentsupdate/{id}/{userphonenumber}/{mrnumber}', 'App\Http\Controllers\TreatmentController@update')->name('update');
Route::get('userchecktreatments/{id}', 'App\Http\Controllers\TreatmentController@usercheckid')->name('usercheckid');

//userpets
Route::resource('userpets', 'App\Http\Controllers\userpetsController');
Route::get('/userpetshow/fetch_image/{id}','App\Http\Controllers\userpetsController@fetch_image');
Route::get('/checkuserpet', 'App\Http\Controllers\userpetsController@index');
Route::get('/userpetcreate', 'App\Http\Controllers\userpetsController@create');


//admin
//Route::get('/adminhome','App\Http\Controllers\AdminHomeController@index')->name('index');
Route::get('/adminhome','App\Http\Controllers\adminController@adminhome')->name('admin');
Route::get('/EMRS_home','App\Http\Controllers\AdminHomeController@EMRS')->name('EMRS');
//Route::get('/medicalrecordcreate','App\Http\Controllers\AdminHomeController@medicalrecordcreate')->name('medicalrecordcreate');
Route::get('/admincheckappointment', 'App\Http\Controllers\AppointmentController@checkadmin');
Route::get('/admincheckmedicalrecord', 'App\Http\Controllers\MedicalRecordController@checkadmin');
//暫定searchuser
Route::get('searchuser','App\Http\Controllers\adminController@search_userdata')->name('search_userdata');

//adminComments
Route::resource('adminposts','App\Http\Controllers\AdminPostController');
Route::get('/showposts', 'App\Http\Controllers\AdminPostController@index');
Route::resource('admincomments', 'App\Http\Controllers\AdminCommentController');
Route::post('destroyall','App\Http\Controllers\adminController@destroyall');


//ForumPost and Comment
Route::get('/forum','App\Http\Controllers\PostsController@index');
Route::get('/posts/create','App\Http\Controllers\PostsController@create');
Route::post('/posts','App\Http\Controllers\PostsController@store');
Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');
Route::post('/posts/{post}/comments','App\Http\Controllers\CommentsController@store');

Auth::routes();



Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user');
Route::get('/admin', 'App\Http\Controllers\adminController@index')->name('admin');

Auth::routes();
