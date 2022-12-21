<?php

namespace App\Http\Controllers;
use DB;
use App\Category;
use App\Baidang;
use App\Dangky;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Http\Request;

class DangkyController extends Controller
{
	
    public function all_dangky(){
    	$data = Dangky::paginate(5);
    	return view('admin.dangky.all_dangky')->with('data',$data);
    }
    public function delete_dangky($dangky_id){
    	Dangky::where('dangky_id',$dangky_id)->delete();
    
    	return Redirect()->back(); 
    }
 
}
