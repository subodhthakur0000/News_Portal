<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use DB;
use App\Traits\Validation;
use App\Traits\Imagetrait;
use Carbon\Carbon;

class FileController extends Controller
{
    use Validation;
    use Imagetrait;

   public function index()
  {
    $file = File::orderBy('created_at', 'desc')->get();
    return view('cd-admin.media.view_file',compact('file'));

  }

  public function insertform()
  {
    return view('cd-admin.media.add_file');
  }

  public function store()
  {
   $a=[];
   $test=$this->filevalidation();
   $a['created_at'] = Carbon::now('Asia/Kathmandu');
   $a['file'] = $this->imageupload($test['file']);
   $merge = array_merge($test,$a);
   DB::table('files')->insert($merge);
   return redirect('/view_file')->with('success','Inserted Successfully');
 }

public function delete($id)
{
  $fileunlink = DB::table('files')->where('id',$id)->get()->first();
      if(file_exists('public/uploads'.$fileunlink->file))
      {
        unlink('public/uploads'.$fileunlink->file);
      }
  DB::table('files')->where('id',$id)->delete();
  return redirect('/view_file')->with('error','Deleted Successfully');
}

}