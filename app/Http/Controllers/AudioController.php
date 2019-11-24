<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audio;
use DB;
use App\Traits\Validation;
use App\Traits\Imagetrait;
use Carbon\Carbon;

class AudioController extends Controller
{
   use Validation;
   use Imagetrait;

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
   $a['audio'] = $this->imageupload($test['audio']);
   $merge = array_merge($test,$a);
   DB::table('audio')->insert($merge);
   return redirect('/view_audio')->with('success','Inserted Successfully');
 }

 public function edit($id)
 {
  $audio = Audio::findorfail($id);
  return view('cd-admin.media.audio.edit_audio',compact('audio'));
}

public function update($id)
{
 $a=[];
 $test=$this->audioupdatevalidation();
 $a['updated_at'] = Carbon::now('Asia/Kathmandu');
 $audio = DB::table('audio')->where('id',$id)->get()->first();
 if(!empty($test['audio']))
      {
        
        unlink('public/uploads/'.$audio->audio);
        $a['audio'] = $this->imageupload($test['audio']);
      }
  else{

    $a['audio'] = $audio->audio;

  }
 $merge = array_merge($test,$a);
 DB::table('audio')->where('id',$id)->update($merge);
 return redirect('/view_audio')->with('success','Updated Successfully');
}

public function updatestatus($id)
      {
        $a = [];
        $data = DB::table('audio')->where('id',$id)->get()->first();
        if($data->status=='Active')
        {
          $a['status'] = 'Inactive';
        }
        else
        {
          $a['status'] = 'Active'; 
        }
        DB::table('audio')->where('id',$id)->update($a);
        return redirect('/view_audio')->with('success','Status Updated Successfully');
       }


public function delete($id)
{
  $audio = DB::table('audio')->where('id',$id)->get()->first();
      if(file_exists('public/uploads/'.$audio->audio))
      {

        unlink('public/uploads/'.$audio->audio);
      }
  DB::table('audio')->where('id',$id)->delete();
  return redirect('/view_audio')->with('error','Deleted Successfully');
}

}