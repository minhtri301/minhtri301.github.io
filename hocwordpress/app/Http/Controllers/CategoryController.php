<?php

namespace App\Http\Controllers;
use DB;
use App\Category;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add_category(){
      return view('admin.category.add_category');
    }

    public function save_category(Request $request){
    	$data = $request->all();
       $category = new Category;
       $category->category_name = $data['category_name']; 
       $category->category_slug = $data['category_slug']; 
       $category->category_title = $data['category_title']; 
       $category->category_status = $data['category_status'];
       $category->save();
       Session::put('message','bạn đã thêm thành công');
       return Redirect()->back();
    }
    
    public function delete_category($category_id){
       Category::find($category_id)->delete();
       Session::put('message','bạn đã xóa thành công');
       return Redirect::to('all-category');
    }
    public function hienthi_category($category_id){
    	$data = Category::find($category_id); 
    	$data->category_status = 1; 
    	$data->save();
    	return Redirect()->back();
    }
    public function khonghienthi_category($category_id){
    	$data = Category::find($category_id); 
    	$data->category_status = 0; 
    	$data->save();
    	return Redirect()->back();
    }

    public function all_category(){
       $data = DB::table('tbl_category')->get();
       return view('admin.category.all_category')->with('all_category',$data);
    }

    public function edit_category($category_id){
      $data = Category::find($category_id); 
      return view('admin.category.edit_category')->with('category',$data);
    }
    public function update_category($category_id, Request $request){
    	$data = $request->all();
    	$update = Category::find($category_id); 
    	$update->category_name = $data['category_name']; 
    	$update->category_slug =  $data['category_slug'];
    	$update->category_title =   $data['category_title'];
    	$update->save();
    	Session::put('message','Đã cập nhật thành công');
    	return Redirect('all-category');

    }
}
