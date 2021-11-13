<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::redirect('','/login');

Route::resource('perencanaan', 'PerencanaanController')->middleware('auth');
Route::resource('pengawasan', 'PengawasanController')->middleware('auth');
Route::resource('masterplan', 'MasterplanController')->middleware('auth');
Route::resource('study', 'StudyController')->middleware('auth');

Route::resource('legal', 'LegalController')->middleware('auth');
Route::resource('peralatan', 'PeralatanController')->middleware('auth');
//kepegawaian
Route::resource('pegawai', 'PegawaiController')->middleware('auth');
Route::resource('tenaga_ahli', 'Tenaga_ahliController')->middleware('auth');

//edit dropdown menu content
Route::get('bangunan','OtherController@bangunan')->name('bangunan.index')->middleware('auth');

//bangunan
Route::get('bangunan/add','OtherController@bangunan_add')->name('bangunan.create')->middleware('auth');
Route::post('bangunan',  'OtherController@bangunan_addprocess')->name('bangunan.process')->middleware('auth');
Route::get('bangunan/edit/{id}','OtherController@bangunan_edit')->name('bangunan.edit')->middleware('auth');
Route::patch('bangunan/{id}', 'OtherController@bangunan_editprocess')->name('bangunan.edit_process')->middleware('auth');
Route::delete('bangunan/{id}', 'OtherController@bangunan_delete')->name('bangunan.destroy')->middleware('auth');

//ska
Route::resource('ska', 'skaController')->middleware('auth');
Route::resource('fase', 'FaseController')->middleware('auth');
Route::resource('jabatan', 'jabatanController')->middleware('auth');
Route::resource('role', 'RoleController')->middleware('auth');
Route::resource('user', 'UserController')->middleware('auth');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('home', 'HomeController')->middleware('auth');


