<?php
namespace App\Traits;

use Illuminate\Http\Request;


trait Validation {

	 public function seovalidation()
	  {
	    $data = Request()->validate([
	            'pagetitle'     =>  'required|unique:seos,pagetitle',
	            'seotitle'    => 'required|max:60',
	            'seokeyword'  => 'required|max:60',
	            'seodescription'  => 'required',
	        ]);
	       return ($data);
	  }

	  public function seoupdatevalidation()
	  {
	    $data = Request()->validate([
	            'pagetitle'     =>  'required',
	            'seotitle'    => 'required|max:60',
	            'seokeyword'  => 'required|max:60',
	            'seodescription'  => 'required',
	        ]);
	       return ($data);
	  }

	  public function userinfovalidation()
	  {
	    $data = Request()->validate([
	            'name'     =>  'required|max:50',
	            'email'    => 'required|email|max:30',
	            'phone'  => 'required|max:60',
	        ]);
	       return ($data);
	  }

	  public function writerinfovalidation()
	  {
	    $data = Request()->validate([
	            'username'     =>  'required|unique:writerinfos,username|max:50',
	            'name'			=> 'required|max:50',
	            'email'    => 'required|email|max:30',
	            'phone'  => 'required|max:60',
	        ]);
	       return ($data);
	  }

	 
}