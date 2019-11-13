<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userinfo;
use DB;
use App\Traits\Validation;
use Carbon\Carbon;

class UserinfoController extends Controller
{
    use Validation;

    public function index()
  {
    $userinfo = Userinfo::orderBy('created_at', 'desc')->get();
    return view('cd-admin.userinfo.userinfo',compact('userinfo'));


  }

  public function insertform()
  {
    return view('cd-admin.userinfo.adduserinfo');
  }

  public function store()
  {
   $a=[];
   $test=$this->userinfovalidation();
   $a['created_at'] = Carbon::now('Asia/Kathmandu');
   $merge = array_merge($test,$a);
   DB::table('userinfos')->insert($merge);
   return redirect('/userinfo')->with('success','Inserted Successfully');
 }



public function delete($id)
{
  DB::table('userinfos')->where('id',$id)->delete();
  return redirect('/userinfo')->with('error','Deleted Successfully');
}

}