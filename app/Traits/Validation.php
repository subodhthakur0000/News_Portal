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

	  public function advertisementvalidation()
	  {
	    $data = Request()->validate([
	            'advertisementtitle'     =>  'required',
	            'advertisementurl'			=> 'required',
	            'advertisementdescription'    => 'required',
	            'image'  => 'required',
	            'alternativeadvertisementdescription' => 'required',
	            'section' => 'required',
	        ]);
	       return ($data);
	  }

	  public function advertisementupdatevalidation()
	  {
	    $data = Request()->validate([
	            'advertisementtitle'     =>  'required',
	            'advertisementurl'			=> 'required',
	            'advertisementdescription'    => 'required',
	            'image'  => 'required',
	            'alternativeadvertisementdescription' => 'required',
	            'section' => 'required',
	        ]);
	       return ($data);
	  }

	  public function newsvalidation()
	  {
	    $data = Request()->validate([
	            'newstitle'     =>  'required',
	            'writerusername'			=> 'required',
	            'news'    => 'required',
	            'newssummary'  => 'required',
	            'seotitle' => 'required',
	            'seokeyword' => 'required',
	            'seodescription' => 'required',
	            'category' =>'',
	            
	        ]);
	       return ($data);
	  }

	  public function newsupdatevalidation()
	  {
	    $data = Request()->validate([
	            'newstitle'     =>  'required',
	            'writerusername'			=> 'required',
	            'news'    => 'required',
	            'newssummary'  => 'required',
	            'seotitle' => 'required',
	            'seokeyword' => 'required',
	            'seodescription' => 'required',
	            'category' =>'',
	            
	        ]);
	       return ($data);
	  }

	   public function audiovalidation()
		  {
		    $data = Request()->validate([
		            'audiourl'     =>  'required',
		            'audiotitle'    => 'required',
		            'audiodescription'  => 'required',
		            'audiosummary'  => 'required',
		            'seotitle' => 'required',
		            'seokeyword' => 'required',
		            'seodescription' => 'required',
		        ]);
		       return ($data);
		  }

	public function videovalidation()
		  {
		    $data = Request()->validate([
		            'videourl'     =>  'required',
		            'videotitle'    => 'required',
		            'videodescription'  => 'required',
		            'videosummary'  => 'required',
		            'seotitle' => 'required',
		            'seokeyword' => 'required',
		            'seodescription' => 'required',
		        ]);
		       return ($data);
		  }

	public function filevalidation()
		  {
		    $data = Request()->validate([
		            'file'     =>  'required',
		            'altfiledescription' => 'required',
		            'filetitle'    => 'required',
		            'filedescription'  => 'required',
		            'filesummary'  => 'required',
		            'seotitle' => 'required',
		            'seokeyword' => 'required',
		            'seodescription' => 'required',
		        ]);
		       return ($data);
		  }


		   public function commentvalidation()
			  {
			    $data = Request()->validate([
			            'comment'     =>  'required',
			            'email'    => 'required|email|max:30',
			        ]);
			       return ($data);
			  }

		public function replyvalidation()
			  {
			    $data = Request()->validate([
			            'reply'     =>  'required',
			            'email'    => 'required|email|max:30',
			        ]);
			       return ($data);
			  }


	 
}