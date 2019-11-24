<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use DB;
use App\Traits\Validation;
use App\Traits\Imagetrait;
use Carbon\Carbon;

class PhotoController extends Controller
{

  use Validation;
  use Imagetrait;

   public function index()
  {
    $photo = Photo::orderBy('created_at', 'desc')->get();
    return view('cd-admin.media.photo.view_photo',compact('photo'));


  }

  public function insertform()
  {
    return view('cd-admin.media.photo.add_photo');
  }

  public function store()
  {
   $a=[];
   $test=$this->photovalidation();
   $a['created_at'] = Carbon::now('Asia/Kathmandu');
   $a['photo'] = $this->imageupload($test['photo']);
   $merge = array_merge($test,$a);
   DB::table('photos')->insert($merge);
   return redirect('/view_photo')->with('success','Inserted Successfully');
 }

 public function edit($id)
 {
  $photo = Photo::findorfail($id);
  return view('cd-admin.media.photo.edit_photo',compact('photo'));
}

public function update($id)
{
 $a=[];
 $test=$this->photoupdatevalidation();
 $a['updated_at'] = Carbon::now('Asia/Kathmandu');
 $photo = DB::table('photos')->where('id',$id)->get()->first();
 if(!empty($test['photo']))
 {

  unlink('public/uploads/'.$photo->file);
  $a['photo'] = $this->imageupload($test['photo']);
}
else{

  $a['photo'] = $photo->photo;

}
$merge = array_merge($test,$a);
DB::table('photos')->where('id',$id)->update($merge);
return redirect('/view_photo')->with('success','Updated Successfully');
}

public function updatestatus($id)
{
  $a = [];
  $data = DB::table('photos')->where('id',$id)->get()->first();
  if($data->status=='Active')
  {
    $a['status'] = 'Inactive';
  }
  else
  {
    $a['status'] = 'Active'; 
  }
  DB::table('photos')->where('id',$id)->update($a);
  return redirect('/view_photo')->with('success','Status Updated Successfully');
}

public function delete($id)
{
  $fileunlink = DB::table('photos')->where('id',$id)->get()->first();
  if(file_exists('public/uploads/'.$fileunlink->photo))
  {
    unlink('public/uploads/'.$fileunlink->photo);
  }
  DB::table('photos')->where('id',$id)->delete();
  return redirect('/view_photo')->with('error','Deleted Successfully');
}

}
