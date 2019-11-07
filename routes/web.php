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

