<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Writerinfo;
use DB;
use App\Traits\Validation;
use Carbon\Carbon;

class WriterinfoController extends Controller
{
    use Validation;

    public function index()
  {
    $writerinfo = Writerinfo::orderBy('created_at', 'desc')->get();
    return view('cd-admin.writerinfo.writerinfo',compact('writerinfo'));


  }

  public function insertform()
  {
    return view('cd-admin.writerinfo.addwriterinfo');
  }

  public function store()
  {
   $a=[];
   $test=$this->writerinfovalidation();
   $a['created_at'] = Carbon::now('Asia/Kathmandu');
   $merge = array_merge($test,$a);
   DB::table('writerinfos')->insert($merge);
   return redirect('/writerinfo')->with('success','Inserted Successfully');
 }



public function delete($id)
{
  DB::table('writerinfos')->where('id',$id)->delete();
  return redirect('/writerinfo')->with('error','Deleted Successfully');
}

}

