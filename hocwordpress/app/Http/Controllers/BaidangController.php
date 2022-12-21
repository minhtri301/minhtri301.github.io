<?php

namespace App\Http\Controllers;
use DB;
use App\Category;
use App\Baidang;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Http\Request;

class BaidangController extends Controller
{
    public function add_baidang(){
        $data = DB::table('tbl_Category')->get();
    	return view('admin.baidang.add_baidang')->with('data',$data);
    }
    

    public function save_baidang(Request $request){
    	$data = $request->all(); 
    	$baidang = new Baidang; 
    	$baidang->category_id = $data['category_id'];
    	$baidang->baidang_name = $data['baidang_name'];
    	$baidang->baidang_slug = $data['baidang_slug'];
    	$baidang->baidang_title = $data['baidang_title'];
    	$baidang->baidang_status = $data['baidang_status'];
    	$baidang->baidang_content = $data['baidang_content'];
    	 date_default_timezone_set('Asia/Ho_Chi_Minh');
        $baidang->created_at = now();

    	$get_image = $request->file('baidang_image');
        $new_image = $get_image->getClientOriginalName();
        $get_image->move('public/uploads',$new_image);   
 
        $baidang->baidang_image = $new_image;
    
        $baidang->save();
        Session::put('message','Thêm sản phẩm thành công');
     
    	return Redirect::to('add-baidang');
    }
    public function hienthi_baidang($baidang_id){
        $data = Baidang::find($baidang_id); 
        $data->baidang_status = 1; 
        $data->save(); 
        return Redirect()->back();
    }
    public function khonghienthi_baidang($baidang_id){
        $data = Baidang::find($baidang_id); 
        $data->baidang_status = 0; 
        $data->save(); 
        return Redirect()->back();
    }


    public function all_baidang(){
        $data = DB::table('tbl_baidang')->join('tbl_category','tbl_baidang.category_id','=','tbl_category.category_id')->paginate(30);
        return view('admin.baidang.all_baidang')->with('all_baidang',$data);
    }
    public function delete_baidang($baidang_id){
        Baidang::find($baidang_id)->delete(); 
        return Redirect::to('all-baidang');
    }
    public function edit_baidang($baidang_id){
    	$data = Baidang::find($baidang_id); 
    	$category = Category::get();
        return view('admin.baidang.edit_baidang')->with('data',$data)->with('category',$category);
    }
    public function update_baidang($baidang_id, Request $request){
    	$data = $request->all(); 
    	$baidang = Baidang::find($baidang_id); 
    	$baidang->category_id = $data['category_id'];
    	$baidang->baidang_name = $data['baidang_name'];
    	$baidang->baidang_slug = $data['baidang_slug'];
    	$baidang->baidang_title = $data['baidang_title'];
    	$baidang->baidang_status = $data['baidang_status'];
    	$baidang->baidang_content = $data['baidang_content'];
    	 date_default_timezone_set('Asia/Ho_Chi_Minh');
        $baidang->created_at = now();
        
        $get_image = $request->file('baidang_image');
        if($get_image){
        	 $new_image = $get_image->getClientOriginalName();
        	 $get_image->move('public/uploads',$new_image);   
        	$baidang->baidang_image = $new_image;

        	$baidang->save();
        	Session::put('message','Cập nhật thành công');
        	return Redirect::to('all-baidang');
        }else{
           $baidang->save();
        	Session::put('message','Cập nhật thành công');

        	return Redirect::to('all-baidang');

        }

        	
       

    
     
    }

 
}
