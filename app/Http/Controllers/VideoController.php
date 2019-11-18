<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use DB;
use App\Traits\Validation;
use Carbon\Carbon;

class VideoController extends Controller
{
  use Validation;

   public function index()
  {
    $video = Video::orderBy('created_at', 'desc')->get();
    return view('cd-admin.media.view_video',compact('video'));


  }

  public function insertform()
  {
    return view('cd-admin.media.add_video');
  }

  public function store()
  {
   $a=[];
   $test=$this->videovalidation();
   $a['created_at'] = Carbon::now('Asia/Kathmandu');
   $merge = array_merge($test,$a);
   DB::table('videos')->insert($merge);
   return redirect('/view_video')->with('success','Inserted Successfully');
 }

public function delete($id)
{
  DB::table('videos')->where('id',$id)->delete();
  return redirect('/view_video')->with('error','Deleted Successfully');
}

}