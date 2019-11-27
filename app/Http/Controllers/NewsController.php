<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Writerinfo;
use Illuminate\Support\Facades\DB;
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
    
    $writerinfo = Writerinfo::orderBy('username')->get();
    return view('cd-admin.news.add_news',compact('writerinfo'));
  }

  public function store()
  {
   $a=[];
   $test=$this->newsvalidation();
   $a['created_at'] = Carbon::now('Asia/Kathmandu');
   $a['category'] = json_encode($test['category']);
   $a['slug'] =str_slug($test['newstitle']);
   $merge = array_merge($test,$a);
   DB::table('news')->insert($merge);
   return redirect('/view_news')->with('success','Inserted Successfully');
 }

 public function show($slug)
  {
    $news = News::where('slug', $slug)->get()->first();
    $writerinfo = Writerinfo::where('username',$news->writerusername)->get()->first();
    $category = json_decode($news->category);
    return view('cd-admin.news.show_news',compact('news','category','writerinfo'));
  }

 public function edit($slug)
 {
  $news = News::where('slug',$slug)->get()->first();
  $writerinfo = Writerinfo::orderBy('username')->get();
  return view('cd-admin.news.edit_news',compact('news','writerinfo'));
 }

public function update($slug)
{
 $a=[];
 $test=$this->newsupdatevalidation();
 $a['updated_at'] = Carbon::now('Asia/Kathmandu');
 $a['category'] = json_encode($test['category']);
 $merge =  array_merge($test,$a);
 DB::table('news')->where('slug',$slug)->update($merge);
 return redirect('/view_news')->with('success','Updated Successfully');
}

 public function updatestatus($slug)
      {
        $a = [];
        $data = DB::table('news')->where('slug',$slug)->get()->first();
        if($data->status=='Active')
        {
          $a['status'] = 'Inactive';
        }
        else
        {
          $a['status'] = 'Active'; 
        }
        DB::table('news')->where('slug',$slug)->update($a);
        return redirect('/view_news')->with('success','Status Updated Successfully');

       }

public function delete($slug)
{
  DB::table('news')->where('slug',$slug)->delete();
  return redirect('/view_news')->with('error','Deleted Successfully');
}

}