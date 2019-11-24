<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use DB;
use App\Traits\Validation;
use App\Traits\Imagetrait;
use Carbon\Carbon;

class VideoController extends Controller
{
  use Validation;
  use Imagetrait;

   public function index()
  {
    $video = Video::orderBy('created_at', 'desc')->get();
    return view('cd-admin.media.video.view_video',compact('video'));


  }

  public function insertform()
  {
    return view('cd-admin.media.video.add_video');
  }

  public function store()
  {
   $a=[];
   $test=$this->videovalidation();
   $a['created_at'] = Carbon::now('Asia/Kathmandu');
   $a['video'] = $this->imageupload($test['video']);
   $merge = array_merge($test,$a);
   DB::table('videos')->insert($merge);
   return redirect('/view_video')->with('success','Inserted Successfully');
 }

 public function edit($id)
 {
  $video = Video::findorfail($id);
  return view('cd-admin.media.video.edit_video',compact('video'));
}

public function update($id)
{
 $a=[];
 $test=$this->videoupdatevalidation();
 $a['updated_at'] = Carbon::now('Asia/Kathmandu');
 $video = DB::table('videos')->where('id',$id)->get()->first();
 if(!empty($test['video']))
 {

  unlink('public/uploads/'.$video->file);
  $a['video'] = $this->imageupload($test['video']);
}
else{

  $a['video'] = $video->video;

}
$merge = array_merge($test,$a);
DB::table('videos')->where('id',$id)->update($merge);
return redirect('/view_video')->with('success','Updated Successfully');
}

public function updatestatus($id)
{
  $a = [];
  $data = DB::table('videos')->where('id',$id)->get()->first();
  if($data->status=='Active')
  {
    $a['status'] = 'Inactive';
  }
  else
  {
    $a['status'] = 'Active'; 
  }
  DB::table('videos')->where('id',$id)->update($a);
  return redirect('/view_video')->with('success','Status Updated Successfully');
}

public function delete($id)
{
  $fileunlink = DB::table('videos')->where('id',$id)->get()->first();
  if(file_exists('public/uploads/'.$fileunlink->video))
  {
    unlink('public/uploads/'.$fileunlink->video);
  }
  DB::table('videos')->where('id',$id)->delete();
  return redirect('/view_video')->with('error','Deleted Successfully');
}

}