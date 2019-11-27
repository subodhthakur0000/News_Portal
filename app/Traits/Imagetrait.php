<?php
namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


trait Imagetrait {
	public function imageupload($name){
		if(isset($name)){
			$file = $name;
			$fileName = time().$file->getClientOriginalName();
			$destinationPath = public_path('uploads');
			$file->move($destinationPath,$fileName);
			return $fileName;
		}    
	}

	public function multipleupload($name)
    {
        $images=array();
            if($files=$name){
                foreach($files as $file){
                    $name=$file->getClientOriginalName();
                    $file->move('public/uploads/multipleupload',$name);
                    $images[]=$name;
                }
                return $images;
            }
    }


}