<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;
use DB;
use App\Traits\Validation;
use Carbon\Carbon;

class ReplyController extends Controller
{
   use Validation;

    public function index()
  {
    $reply = Reply::orderBy('created_at', 'desc')->get();
    return view('cd-admin.reply.viewreply',compact('reply'));
  }

  public function insertform()
  {
    return view('cd-admin.reply.addreply');
  }

  public function store()
  {
   $a=[];
   $test=$this->replyvalidation();
   $a['created_at'] = Carbon::now('Asia/Kathmandu');
   $merge = array_merge($test,$a);
   DB::table('replies')->insert($merge);
   return redirect('/reply')->with('success','Inserted Successfully');
 }

 public function updatestatus($id)
      {
        $a = [];
        $data = DB::table('replies')->where('id',$id)->get()->first();
        if($data->status=='Active')
        {
          $a['status'] = 'Inactive';
        }
        else
        {
          $a['status'] = 'Active'; 
        }
        DB::table('replies')->where('id',$id)->update($a);
        return redirect('/reply')->with('success','Status Updated Successfully');

       }




public function delete($id)
{
  DB::table('replies')->where('id',$id)->delete();
  return redirect('/reply')->with('error','Deleted Successfully');
}

}