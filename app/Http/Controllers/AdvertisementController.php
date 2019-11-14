<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;
use DB;
use App\Traits\Validation;
use App\Traits\Imagetrait;
use Carbon\Carbon;

class AdvertisementController extends Controller
{
    use Validation;
    use Imagetrait;

    public function index()
  {
    $advertisement = Advertisement::orderBy('created_at', 'desc')->get();
    return view('cd-admin.advertisement.view_advertisement',compact('advertisement'));


  }

  public function insertform()
  {
    return view('cd-admin.advertisement.add_advertisement');
  }

  public function store()
  {
   $a=[];
   $test=$this->advertisementvalidation();
   $a['created_at'] = Carbon::now('Asia/Kathmandu');
   $a['image'] = $this->imageupload($test['image']);
   $merge = array_merge($test,$a);
   DB::table('advertisements')->insert($merge);
   return redirect('/view_advertisement')->with('success','Inserted Successfully');
 }

 public function edit($id)
 {
  $advertisement = Advertisement::findorfail($id);
  return view('cd-admin.advertisement.edit_advertisement',compact('advertisement'));
}

public function update($id)
{
 $a=[];
 $test=$this->advertisementupdatevalidation();
 $a['updated_at'] = Carbon::now('Asia/Kathmandu');
 $a['image'] = $this->imageupload($test['image']);
 $merge =  array_merge($test,$a);
 DB::table('advertisements')->where('id',$id)->update($merge);
 return redirect('/view_advertisement')->with('success','Updated Successfully');
}

public function delete($id)
{
  $imageunlink = DB::table('advertisements')->where('id',$id)->get()->first();
      if(file_exists('public/uploads'.$imageunlink->image))
      {
        unlink('public/uploads'.$imageunlink->image);
      }
  DB::table('advertisements')->where('id',$id)->delete();
  return redirect('/view_advertisement')->with('error','Deleted Successfully');
}

}

