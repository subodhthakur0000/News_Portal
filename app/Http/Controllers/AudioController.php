<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audio;
use DB;
use App\Traits\Validation;
use Carbon\Carbon;

class AudioController extends Controller
{
   use Validation;

    public function index()
  {
    $audio = Audio::orderBy('created_at', 'desc')->get();
    return view('cd-admin.media.audio.view_audio',compact('audio'));


  }

  public function insertform()
  {
    return view('cd-admin.media.audio.add_audio');
  }

  public function store()
  {
   $a=[];
   $test=$this->audiovalidation();
   $a['created_at'] = Carbon::now('Asia/Kathmandu');
   $merge = array_merge($test,$a);
   DB::table('audio')->insert($merge);
   return redirect('/view_audio')->with('success','Inserted Successfully');
 }

public function delete($id)
{
  DB::table('audio')->where('id',$id)->delete();
  return redirect('/view_audio')->with('error','Deleted Successfully');
}

}