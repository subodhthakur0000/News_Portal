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

// Backend
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=> 'auth'] , function(){

Route::get('/logout','HomeController@logout');
Route::get('/viewadmin','HomeController@viewadmin');
Route::get('/addadmin', 'HomeController@addadmin');
Route::post('/storeadmin', 'HomeController@storeadmin');
Route::DELETE('/deleteadmin/{id}', 'HomeController@deleteadmin');



Route::get('/dashboard',function(){
	return view('cd-admin.dashboard.dashboard');
});
Route::any('/search','DashboardController@search');


route::get('/view_news','NewsController@index');
route::get('/add_news','NewsController@insertform');
route::post('/store_news','NewsController@store');
route::get('/edit_news/{slug}','NewsController@edit');
route::get('/show_news/{slug}','NewsController@show');
route::post('/update_news/{slug}','NewsController@update');
route::post('/update_newsstatus/{slug}','NewsController@updatestatus');
route::DELETE('/delete_news/{slug}','NewsController@delete');


Route::get('/view_audio','AudioController@index');
Route::get('/add_audio','AudioController@insertform');
Route::post('/store_audio','AudioController@store');
Route::get('/edit_audio/{id}','AudioController@edit');
Route::post('/update_audio/{id}','AudioController@update');
Route::post('/update_audiostatus/{id}','AudioController@updatestatus');
Route::DELETE('/delete_audio/{id}','AudioController@delete');

Route::get('/view_file','FileController@index');
Route::get('/add_file','FileController@insertform');
Route::post('/store_file','FileController@store');
Route::get('/edit_file/{id}','FileController@edit');
Route::post('/update_file/{id}','FileController@update');
Route::post('/update_filestatus/{id}','FileController@updatestatus');
Route::DELETE('/delete_file/{id}','FileController@delete');

Route::get('/view_photo','PhotoController@index');
Route::get('/add_photo','PhotoController@insertform');
Route::post('/store_photo','PhotoController@store');
Route::get('/edit_photo/{id}','PhotoController@edit');
Route::post('/update_photo/{id}','PhotoController@update');
Route::post('/update_photostatus/{id}','PhotoController@updatestatus');
Route::DELETE('/delete_photo/{id}','PhotoController@delete');

Route::get('/view_video','VideoController@index');
Route::get('/add_video','VideoController@insertform');
Route::post('/store_video','VideoController@store');
Route::get('/edit_video/{id}','VideoController@edit');
Route::post('/update_video/{id}','VideoController@update');
Route::post('/update_videostatus/{id}','VideoController@updatestatus');
Route::DELETE('/delete_video/{id}','VideoController@delete');




route::get('/view_advertisement','AdvertisementController@index');
route::get('/add_advertisement','AdvertisementController@insertform');
route::post('/store_advertisement','AdvertisementController@store');
route::get('/edit_advertisement/{id}','AdvertisementController@edit');
route::post('/update_advertisement/{id}','AdvertisementController@update');
Route::post('/update_advertisementstatus/{id}','AdvertisementController@updatestatus');
route::DELETE('/delete_advertisement/{id}','AdvertisementController@delete');

Route::get('/comment','CommentController@index');
Route::get('/addcomment','CommentController@insertform');
Route::post('/storecomment','CommentController@store');
Route::post('/update_commentstatus/{id}','CommentController@updatestatus');
Route::DELETE('/deletecomment/{id}','CommentController@delete');

Route::get('/reply','ReplyController@index');
Route::get('/addreply','ReplyController@insertform');
Route::post('/storereply','ReplyController@store');
Route::post('/update_replystatus/{id}','ReplyController@updatestatus');
Route::DELETE('/deletereply/{id}','ReplyController@delete');

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


});
