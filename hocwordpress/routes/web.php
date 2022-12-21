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
// admin
Route::get('add-category','CategoryController@add_category'); 
Route::post('save-category','CategoryController@save_category');
Route::get('hienthi-category/{category_id}','CategoryController@hienthi_category'); 
Route::get('khonghienthi-category/{category_id}','CategoryController@khonghienthi_category'); 
Route::get('delete-category/{category_id}','CategoryController@delete_category');
Route::get('all-category','CategoryController@all_category'); 
Route::get('edit-category/{category_id}','CategoryController@edit_category');
Route::post('update-category/{category_id}','CategoryController@update_category');

Route::get('add-baidang','BaidangController@add_baidang'); 
Route::post('save-baidang','BaidangController@save_baidang');
Route::get('hienthi-baidang/{baidang_id}','BaidangController@hienthi_baidang');
Route::get('khonghienthi-baidang/{baidang_id}','BaidangController@khonghienthi_baidang');
Route::get('all-baidang','BaidangController@all_baidang'); 
Route::get('delete-baidang/{baidang_id}','BaidangController@delete_baidang');
Route::get('edit-baidang/{baidang_id}','BaidangController@edit_baidang');
Route::post('update-baidang/{baidang_id}','BaidangController@update_baidang');

Route::get('all-dangky','DangkyController@all_dangky'); 
// Route::get('edit-dangky/{dangky_id}','DangkyController@edit_dangky');
Route::get('delete-dangky/{dangky_id}','DangkyController@delete_dangky');
// Route::post('edit-dangky','DangkyController@edit_dangky');

Route::get('/admin','AdminController@admin');

// pages

Route::post('/search-ajax','HomeController@search_ajax');
Route::get('/gioithieu','HomeController@gioithieu');
Route::post('/dangky','HomeController@dangky');

Route::get('/','HomeController@index');
Route::get('/trangchu','HomeController@trangchu');
Route::get('/ket-qua-tim-kiem','HomeController@ket_qua_tim_kiem')->name('search');
Route::get('/{baidang_slug}','HomeController@baidang_nav_chitiet')->name('chitiet');





