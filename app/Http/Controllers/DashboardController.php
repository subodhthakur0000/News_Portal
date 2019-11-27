<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Input;

class DashboardController extends Controller
{
    public function Search()
    {
    	$no = 'No Details found. Try to search again !';
    	$q = Input::get ( 'q' );
	    $news = News::where ( 'newstitle', 'LIKE', '%' . $q . '%' )
	    		->orWhere ( 'writerusername', 'LIKE', '%' . $q . '%' )
	    		->orWhere ( 'created_at', 'LIKE', '%' . $q . '%' )
	    		->get ();
	    if (count ( $news ) > 0)
	        return view ( 'cd-admin.dashboard.search',compact('news','q') );
	    else
	        return view ( 'cd-admin.dashboard.search',compact('no') );
    }
}
