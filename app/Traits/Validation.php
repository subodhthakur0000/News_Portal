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
	            'seodescription'  => 'required|max:5000',
	        ]);
	       return ($data);
	  }

	  public function seoupdatevalidation()
	  {
	    $data = Request()->validate([
	            'pagetitle'     =>  'required',
	            'seotitle'    => 'required|max:60',
	            'seokeyword'  => 'required|max:60',
	            'seodescription'  => 'required|max:5000',
	        ]);
	       return ($data);
	  }

	  public function userinfovalidation()
	  {
	    $data = Request()->validate([
	            'name'     =>  'required|max:50',
	            'email'    => 'required|email|max:30',
	            'phone'  => 'required|max:15',
	        ]);
	       return ($data);
	  }

	  public function writerinfovalidation()
	  {
	    $data = Request()->validate([
	            'username'     =>  'required|unique:writerinfos,username|max:50',
	            'name'			=> 'required|max:50',
	            'email'    => 'required|email|max:30',
	            'phone'  => 'required|max:15',
	        ]);
	       return ($data);
	  }

	  public function advertisementvalidation()
	  {
	    $data = Request()->validate([
	            'advertisementtitle'     =>  'required|unique:advertisements,advertisementtitle|max:1000',
	            'advertisementurl'			=> 'required',
	            'advertisementdescription'    => 'required
	            ',
	            'image'  => 'required|image|mimes:jpeg,png,jpg,gif,svg',
	            'alternativeadvertisementdescription' => 'required|max:1000',
	            'section' => 'required',
	            'status'	=> 'required',
	        ]);
	       return ($data);
	  }

	  public function advertisementupdatevalidation()
	  {
	    $data = Request()->validate([
	            'advertisementtitle'     =>  'required|max:1000',
	            'advertisementurl'			=> 'required',
	            'advertisementdescription'    => 'required
	            ',
	            'image'  => 'required|image|mimes:jpeg,png,jpg,gif,svg',
	            'alternativeadvertisementdescription' => 'required|max:1000',
	            'section' => 'required',
	            'status'	=> 'required',
	        ]);
	       return ($data);
	  }

	  public function newsvalidation()
	  {
	    $data = Request()->validate([
	            'newstitle'     =>  'required|unique:news,newstitle',
	            'writerusername'			=> 'required',
	            'news'    => 'required',
	            'newssummary'  => 'required',
	            'seotitle' => 'required|max:60',
	            'seokeyword' => 'required|max:60',
	            'seodescription' => 'required | max:5000',
	            'category' =>'required',
	            'status' => 'required',
	            
	        ]);
	       return ($data);
	  }

	  public function newsupdatevalidation()
	  {
	    $data = Request()->validate([
	            'newstitle'     =>  'required',
	            'writerusername' => 'required',
	            'news'    => 'required',
	            'newssummary'  => 'required',
	            'seotitle' => 'required|max:60',
	            'seokeyword' => 'required|max:60',
	            'seodescription' => 'required|max:5000',
	            'category' =>'required',
	            'status' => 'required',
	            
	        ]);
	       return ($data);
	  }

	   public function audiovalidation()
		  {
		    $data = Request()->validate([
		    		'audiotitle'    => 'required',
		    		'audio'			=> 'mimes:3gp,aiff,alac,m4a,mp3',
		            'audiourl'     =>  '',   
		            'audiodescription'  => 'required',
		            'audiosummary'  => 'required|max:300',
		            'status'		=> 'required',
		            'seotitle' => 'required|max:60',
		            'seokeyword' => 'required|max:60',
		            'seodescription' => 'required|max:5000',
		        ]);
		       return ($data);
		  }

		  public function audioupdatevalidation()
		  {
		    $data = Request()->validate([
		    		'audiotitle'    => 'required',
		    		'audio'			=> 'mimes:3gp,aiff,alac,m4a,mp3',
		            'audiourl'     =>  '',   
		            'audiodescription'  => 'required',
		            'audiosummary'  => 'required|max:300',
		            'status'		=> 'required',
		            'seotitle' => 'required|max:60',
		            'seokeyword' => 'required|max:60',
		            'seodescription' => 'required|max:5000',
		        ]);
		       return ($data);
		  }

	public function videovalidation()
		  {
		    $data = Request()->validate([
		            'videotitle'    => 'required|max:300',
		    		'video'			=> 'mimes:mp4,mov,ogg',
		            'videourl'     =>  '',   
		            'videodescription'  => 'required|max:5000',
		            'videosummary'  => 'required|max:300',
		            'status'		=> 'required',
		            'seotitle' => 'required|max:60',
		            'seokeyword' => 'required|max:60',
		            'seodescription' => 'required|max:300',
		        ]);
		       return ($data);
		  }	

	public function videoupdatevalidation()
		  {
		    $data = Request()->validate([
		            'videotitle'    => 'required|max:300',
		    		'video'			=> 'mimes:mp4,mov,ogg',
		            'videourl'     =>  '',   
		            'videodescription'  => 'required|max:5000',
		            'videosummary'  => 'required|max:300',
		            'status'		=> 'required',
		            'seotitle' => 'required|max:60',
		            'seokeyword' => 'required|max:60',
		            'seodescription' => 'required|max:300',
		        ]);
		       return ($data);
		  }

	public function photovalidation()
		  {
		    $data = Request()->validate([
		            'phototitle'    => 'required|max:300',
		    		'photo'			=> 'image|mimes:jpeg,png,jpg,gif,svg',
		            'photourl'     =>  '',   
		            'photodescription'  => 'required|max:500',
		            'photosummary'  => 'required|max:300',
		            'status'		=> 'required',
		            'seotitle' => 'required|max:60',
		            'seokeyword' => 'required|max:60',
		            'seodescription' => 'required|max:5000',
		        ]);
		       return ($data);
		  }

	public function photoupdatevalidation()
		  {
		    $data = Request()->validate([
		            'phototitle'    => 'required|max:300',
		    		'photo'			=> 'image|mimes:jpeg,png,jpg,gif,svg',
		            'photourl'     =>  '',   
		            'photodescription'  => 'required|max:500',
		            'photosummary'  => 'required|max:300',
		            'status'		=> 'required',
		            'seotitle' => 'required|max:60',
		            'seokeyword' => 'required|max:60',
		            'seodescription' => 'required|max:5000',
		        ]);
		       return ($data);
		  }



	public function filevalidation()
		  {
		    $data = Request()->validate([
		            'filetitle'    => 'required|unique:files,filetitle|max:500',
		    		'file'			=> 'mimes: pdf, doc,docx,xls,xlsm,ppt,pptx,xlsx',
		            'fileurl'     =>  'required',   
		            'filedescription'  => 'required | max:5000',
		            'filesummary'  => 'required | max: 300',
		            'status'		=> 'required',
		            'seotitle' => 'required|max:60',
		            'seokeyword' => 'required|max:60',
		            'seodescription' => 'required | max: 5000',
		        ]);
		       return ($data);
		  }

	public function fileupdatevalidation()
		  {
		    $data = Request()->validate([
		            'filetitle'    => 'required|max:500',
		    		'file'			=> 'mimes: pdf, doc,docx,xls,xlsm,ppt,pptx,xlsx',
		            'fileurl'     =>  'required',   
		            'filedescription'  => 'required | max:5000',
		            'filesummary'  => 'required | max: 300',
		            'status'		=> 'required',
		            'seotitle' => 'required|max:60',
		            'seokeyword' => 'required|max:60',
		            'seodescription' => 'required | max: 5000',
		        ]);
		       return ($data);
		  }


		   public function commentvalidation()
			  {
			    $data = Request()->validate([
			            'comment'     =>  'required|max:5000',
			            'email'    => 'required|email|max:30',
			            'status'   =>  'required',
			        ]);
			       return ($data);
			  }

		public function replyvalidation()
			  {
			    $data = Request()->validate([
			            'reply'     =>  'required|max:5000',
			            'email'    => 'required|email|max:30',
			            'status'   =>  'required',
			        ]);
			       return ($data);
			  }


	 
}