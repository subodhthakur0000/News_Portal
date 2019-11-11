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
	return view('cd-admin/admin-master');
});

Route::get('/add_news',function(){
	return view('cd-admin.news.add_news');
});

Route::get('/view_news',function(){
	return view('cd-admin.news.view_news');
});

Route::get('/show_news',function(){
	return view('cd-admin.news.show_news');
});

route::get('/edit_news',function(){
	return view('cd-admin.news.edit_news');
});



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

route::get('/view_advertisement',function(){
	return view('cd-admin.advertisement.view_advertisement');
});
route::get('/add_advertisement',function(){
	return view('cd-admin.advertisement.add_advertisement');
});
route::get('/edit_advertisement',function(){
	return view('cd-admin.advertisement.edit_advertisement');
});

Route::get('/comment',function(){
	return view('cd-admin/comment/viewcomment');
});

Route::get('/reply',function(){
	return view('cd-admin/reply/viewreply');
});

Route::get('/writerinfo',function(){
	return view('cd-admin/writerinfo/writerinfo');
});
Route::get('/addwriterinfo',function(){
	return view('cd-admin/writerinfo/addwriterinfo');
});

Route::get('/userinfo',function(){
	return view('cd-admin/userinfo/userinfo');
});

Route::get('/adduserinfo',function(){
	return view('cd-admin/userinfo/adduserinfo');
});

Route::get('/seo',function(){
	return view('cd-admin/seo/viewseo');
});

Route::get('/addseo',function(){
	return view('cd-admin/seo/addseo');
});

Route::get('/editseo',function(){
	return view('cd-admin/seo/editseo');
});

Route::get('/admin',function(){
	return view('cd-admin/admin/viewadmin');
});

Route::get('/addadmin',function(){
	return view('cd-admin/admin/addadmin');
});


