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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',function(){
	return view('cd-admin.dashboard.dashboard');
});


route::get('/view_news','NewsController@index');
route::get('/add_news','NewsController@insertform');
route::post('/store_news','NewsController@store');
route::get('/edit_news/{id}','NewsController@edit');
route::get('/show_news/{id}','NewsController@show');
route::post('/update_news/{id}','NewsController@update');
route::DELETE('/delete_news/{id}','NewsController@delete');



route::get('/add_video',function(){
	return view('cd-admin.media.add_video');
});

route::get('/add_audio',function(){
	return view('cd-admin.media.add_audio');
});

route::get('/add_files',function(){
	return view('cd-admin.media.add_files');
});

route::get('/view_audio',function(){
	return view('cd-admin.media.view_audio');
});

route::get('/view_files',function(){
	return view('cd-admin.media.view_files');
});

route::get('/view_videos',function(){
	return view('cd-admin.media.view_videos');
});

route::get('/view_advertisement','AdvertisementController@index');
route::get('/add_advertisement','AdvertisementController@insertform');
route::post('/store_advertisement','AdvertisementController@store');
route::get('/edit_advertisement/{id}','AdvertisementController@edit');
route::post('/update_advertisement/{id}','AdvertisementController@update');
route::DELETE('/delete_advertisement/{id}','AdvertisementController@delete');

Route::get('/comment',function(){
	return view('cd-admin/comment/viewcomment');
});

Route::get('/reply',function(){
	return view('cd-admin/reply/viewreply');
});

Route::get('/writerinfo','WriterinfoController@index');
Route::get('/addwriterinfo','WriterinfoController@insertform');
Route::post('/storewriterinfo','WriterinfoController@store');
Route::DELETE('/deletewriterinfo/{id}','WriterinfoController@delete');

Route::get('/userinfo','UserinfoController@index');
Route::get('/adduserinfo','UserinfoController@insertform');
Route::post('/storeuserinfo','UserinfoController@store');
Route::DELETE('/deleteuserinfo/{id}','UserinfoController@delete');


Route::get('/seo','SeoController@index');

Route::get('/addseo','SeoController@insertform');
Route::post('/storeseo','SeoController@store');

Route::get('/editseo/{id}','SeoController@edit');
Route::post('/updateseo/{id}','SeoController@update');
Route::post('/deleteseo/{id}','SeoController@delete');

Route::get('/admin',function(){
	return view('cd-admin/admin/viewadmin');
});

Route::get('/addadmin',function(){
	return view('cd-admin/admin/addadmin');
});


