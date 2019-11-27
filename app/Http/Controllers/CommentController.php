<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use DB;
use App\Traits\Validation;
use Carbon\Carbon;

class CommentController extends Controller
{
    use Validation;

    public function index()
  {
    $comment = comment::orderBy('created_at', 'desc')->get();
    return view('cd-admin.comment.viewcomment',compact('comment'));
  }

  public function insertform()
  {
    return view('cd-admin.comment.addcomment');
  }

  public function store()
  {
   $a=[];
   $test=$this->commentvalidation();
   $a['created_at'] = Carbon::now('Asia/Kathmandu');
   $merge = array_merge($test,$a);
   DB::table('comments')->insert($merge);
   return redirect('/comment')->with('success','Inserted Successfully');
 }

 public function updatestatus($id)
      {
        $a = [];
        $data = DB::table('comments')->where('id',$id)->get()->first();
        if($data->status=='Active')
        {
          $a['status'] = 'Inactive';
        }
        else
        {
          $a['status'] = 'Active'; 
        }
        DB::table('comments')->where('id',$id)->update($a);
        return redirect('/comment')->with('success','Status Updated Successfully');

       }



public function delete($id)
{
  DB::table('comments')->where('id',$id)->delete();
  return redirect('/comment')->with('error','Deleted Successfully');
}

}