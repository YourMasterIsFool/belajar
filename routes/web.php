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

Auth::routes();
Route::middleware(['auth'])->group(function () {

Route::post('crud/update', 'CrudController@update')->name('crud.update');
Route::get('crud/tambah_data', function(){
	return view('tambah-data');
});
route::post('crud/tambah_data', 'CrudController@store')->name('crud.store');
Route::get('crud/', 'CrudController@index')->name('crud.index');
Route::post('crud/{id}', 'CrudController@delete')->name('crud.delete');
Route::get('crud/edit/{id}', 'CrudController@edit')->name('crud.edit');//{id} adalah sebuah parameter yang digunakan sebagai patokan pengambilan data yang digunakan dalam menampilkan data tertentu

Route::post('crud/update/{id}', 'CrudController@update')->name('crud.update');
//{id} pada update sebagai patokan perubahan yang akan dilakukan pada data tertentu


Route::get('crud/dosen/home', 'DosenController@index')->name('dosen.home');
Route::get('crud/dosen/create', 'DosenController@create')->name('dosen.create');
Route::post('crud/dosen/create', 'DosenController@simpan')->name('dosen.simpan');
Route::get('crud/dosen/edit/{id}', 'DosenController@edit')->name('dosen.edit');
Route::post('crud/dosen/edit/{id}', 'DosenController@update')->name('dosen.update');


Route::get('crud/matkul/home', 'MatkulController@index')->name('matkul.home');
Route::get('crud/matkul/create', 'MatkulController@create')->name('matkul.create');
Route::post('crud/matkul/create', 'MatkulController@simpan')->name('matkul.simpan');
Route::post('crud/matkul/home/{id}', 'MatkulController@hapus')->name('matkul.hapus');
Route::get('crud/matkul/edit/{id}','MatkulController@edit')->name('matkul.edit');
Route::post('crud/matkul/edit/{id}', 'MatkulController@update')->name('matkul.update');


});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/logout', 'HomeController@logout')->name('logout');
