<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;
use App\Traits\Validation;
use Carbon\Carbon;

class NewsController extends Controller
{
   use Validation;

  public function index()
  {
    $news = News::orderBy('created_at', 'desc')->get();
    return view('cd-admin.news.view_news',compact('news'));
  }

  public function insertform()
  {
    return view('cd-admin.news.add_news');
  }

  public function store()
  {
   $a=[];
   $test=$this->newsvalidation();
   $a['created_at'] = Carbon::now('Asia/Kathmandu');
   $a['category'] = json_encode($test['category']);
   $merge = array_merge($test,$a);
   DB::table('news')->insert($merge);
   return redirect('/view_news')->with('success','Inserted Successfully');
 }

 public function edit($id)
 {
  $news = News::findorfail($id);
  return view('cd-admin.news.edit_news',compact('news'));
 }

public function update($id)
{
 $a=[];
 $test=$this->newsupdatevalidation();
 $a['updated_at'] = Carbon::now('Asia/Kathmandu');
 $merge =  array_merge($test,$a);
 DB::table('news')->where('id',$id)->update($merge);
 return redirect('/view_news')->with('success','Updated Successfully');
}

public function delete($id)
{
  DB::table('news')->where('id',$id)->delete();
  return redirect('/view_news')->with('error','Deleted Successfully');
}

}