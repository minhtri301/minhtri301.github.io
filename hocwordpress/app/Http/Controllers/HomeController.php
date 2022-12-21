<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Mail;
use App\Baidang;
use View;
use App\Dangky;
use App\Customer;
use App\Category;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{

  public function ket_qua_tim_kiem(Request $request){
        $meta_desc = ""; 
        $meta_keywords = "";
        $meta_title = "Học Wordpress từ a đến z - Hướng dẫn wordpress - Khóa học wordpress";
         $url_canonical = $request->url();

         $noibatfooter = DB::table('tbl_baidang')->orderby('baidang_view','desc')->limit(3)->get();
          $categoryright = DB::table('tbl_category')->leftJoin('tbl_baidang','tbl_category.category_id','=','tbl_baidang.category_id')->select('tbl_category.*', DB::raw('count(tbl_baidang.baidang_name) as dem'))->groupBy('tbl_category.category_id')->get();
            $slugmenu = Category::where('category_slug','wordpress-co-ban')->first();
      $slugmenu1 = Category::where('category_slug','lap-trinh-theme')->first();
      $slugmenu2 = Category::where('category_slug','huong-dan-woocommerce')->first();
      $slugmenu3 = Category::where('category_slug','huong-dan-flatsome')->first();
      $slugmenu4 = Category::where('category_slug','thu-thuat')->first();
      $slugmenu5 = Category::where('category_slug','thu-thuat-seo')->first();
      $slugmenu6 = Category::where('category_slug','thu-thuat-may-tinh')->first();
      $slugmenu7 = Category::where('category_slug','khoa-hoc')->first();
      $slugmenu8 = Category::where('category_slug','share-code')->first();
      $slugmenu9 = Category::where('category_slug','lap-trinh-plugin')->first();
      $slugmenu10 = Category::where('category_slug','wordpress-rest-api')->first();
      $slugmenu11 = Category::where('category_slug','domain-hosting-vps-server')->first();
        $category = DB::table('tbl_category')->limit(5)->get();
     $baidangnew = DB::table('tbl_baidang')->orderby('baidang_id','desc')->limit(5)->get();
     $xemnhieu = DB::table('tbl_baidang')->orderby('baidang_view','desc')->limit(5)->get();
      $data = $request->all();
     $query = DB::table('tbl_baidang');
     $dieukien = 0;
     $keycate= '';
     $keywork= '';
     $checkk = 0;
     
         if($data['keywork'] != ""){
          $query = $query->where('baidang_name','LIKE','%'.$data['keywork'].'%');
          $keywork = $data['keywork'];
         }
         
         if(!empty($data['keywork_cate'])){
          $dieukien += 1;
           $query = $query->where('category_id',$data['keywork_cate']);
           $keycate = DB::table('tbl_category')->where('category_id',$data['keywork_cate'])->first();
           
         }
         $ketqua = $query->get();
 
         foreach($ketqua as $key => $check){
          $kiemtra = DB::table('tbl_baidang')->where('baidang_id',$check->baidang_id)->first(); 
            if($kiemtra->baidang_id==true){
              $checkk += 1;
            }
         }
         
         
    
     return view('pages.search', compact('meta_desc','meta_keywords','meta_title','url_canonical','noibatfooter','keywork','keycate','dieukien','ketqua','category','xemnhieu','baidangnew','categoryright','slugmenu','slugmenu1','slugmenu2','slugmenu3','slugmenu4','slugmenu5','slugmenu6','slugmenu7','slugmenu8','slugmenu9','slugmenu10','slugmenu11','checkk'));
    }
    
  
  public function search_ajax(Request $request){
       $data = $request->all(); 
       $baidang = [];
       if($data['key']){
               $baidang = Baidang::where('baidang_status',0)->where('baidang_name','like','%'.$data['key'].'%')->get(); 

       }
       $respon = View::make('pages.ajax-search',compact('baidang'))->render();
       return response()->json(['html'=>$respon]);
    
  }
	public function dangky(Request $request){
		$data = $request->all(); 
    $dangky = new Dangky; 
    $dangky->dangky_name = $data['dangky_name'];
    $dangky->dangky_email = $data['dangky_email'];
    $dangky->dangky_phone = $data['dangky_phone'];
    $dangky->dangky_fb = $data['dangky_fb'];
    $dangky->dangky_note = $data['dangky_note'];
    $dangky->dangky_tenkhoahoc = $data['dangky_tenkhoahoc'];
     date_default_timezone_set('Asia/Ho_Chi_Minh');
        $dangky->created_at = now();
    $dangky->save();
    return Redirect()->back();
	}
   public function trangchu(Request $request){
                $meta_desc = ""; 
        $meta_keywords = "";
        $meta_title = "Học Wordpress từ a đến z - Hướng dẫn wordpress - Khóa học wordpress";
        $url_canonical = $request->url();

         $categoryright = DB::table('tbl_category')->leftJoin('tbl_baidang','tbl_category.category_id','=','tbl_baidang.category_id')->select('tbl_category.*', DB::raw('count(tbl_baidang.baidang_name) as dem'))->groupBy('tbl_category.category_id')->get();
    
         $category = DB::table('tbl_category')->get();
         $baidangnew = DB::table('tbl_baidang')->orderby('baidang_id','desc')->limit(5)->get();
         $xemnhieu = DB::table('tbl_baidang')->orderby('baidang_view','desc')->limit(5)->get();
         $noibatfooter = DB::table('tbl_baidang')->orderby('baidang_view','desc')->limit(3)->get();

   	$check = DB::table('tbl_category')->where('category_name','Khóa học wordpress')->first();
    $data = DB::table('tbl_baidang')->where('baidang_status',0)->where('category_id',$check->category_id)->limit(4)->get();
    $baivietmoi = DB::table('tbl_baidang')->leftJoin('tbl_category','tbl_baidang.category_id','=','tbl_category.category_id')->orderby('baidang_id','desc')->paginate(15);
    

      $slugmenu = Category::where('category_slug','wordpress-co-ban')->first();
      $slugmenu1 = Category::where('category_slug','lap-trinh-theme')->first();
      $slugmenu2 = Category::where('category_slug','huong-dan-woocommerce')->first();
      $slugmenu3 = Category::where('category_slug','huong-dan-flatsome')->first();
      $slugmenu4 = Category::where('category_slug','thu-thuat')->first();
      $slugmenu5 = Category::where('category_slug','thu-thuat-seo')->first();
      $slugmenu6 = Category::where('category_slug','thu-thuat-may-tinh')->first();
      $slugmenu7 = Category::where('category_slug','khoa-hoc')->first();
      $slugmenu8 = Category::where('category_slug','share-code')->first();
      $slugmenu9 = Category::where('category_slug','lap-trinh-plugin')->first();
      $slugmenu10 = Category::where('category_slug','wordpress-rest-api')->first();
      $slugmenu11 = Category::where('category_slug','domain-hosting-vps-server')->first();
    

      return view('pages.trangchu', compact('meta_desc','meta_keywords','meta_title','url_canonical','noibatfooter','data','baidangnew','category','categoryright','xemnhieu','baivietmoi','slugmenu','slugmenu1','slugmenu2','slugmenu3','slugmenu4','slugmenu5','slugmenu6','slugmenu7','slugmenu8','slugmenu9','slugmenu10','slugmenu11'));
      

   }
   public function baidang_nav_chitiet(Request $request, $baidang_slug){
       $meta_desc = ""; 
        $meta_keywords = "";
        $url_canonical = $request->url();
         $noibatfooter = DB::table('tbl_baidang')->orderby('baidang_view','desc')->limit(3)->get();

     $categoryright = DB::table('tbl_category')->leftJoin('tbl_baidang','tbl_category.category_id','=','tbl_baidang.category_id')->select('tbl_category.*', DB::raw('count(tbl_baidang.baidang_name) as dem'))->groupBy('tbl_category.category_id')->get();
   	$category = DB::table('tbl_category')->get();
   	 $baidangnew = DB::table('tbl_baidang')->orderby('baidang_id','desc')->limit(5)->get();
   	 $xemnhieu = DB::table('tbl_baidang')->orderby('baidang_view','desc')->limit(5)->get();
     // $cate = DB::table('tbl_category')->where('baidang_slug',$baidang_slug)->first();
      $slugmenu = Category::where('category_slug','wordpress-co-ban')->first();
      $slugmenu1 = Category::where('category_slug','lap-trinh-theme')->first();
      $slugmenu2 = Category::where('category_slug','huong-dan-woocommerce')->first();
      $slugmenu3 = Category::where('category_slug','huong-dan-flatsome')->first();
      $slugmenu4 = Category::where('category_slug','thu-thuat')->first();
      $slugmenu5 = Category::where('category_slug','thu-thuat-seo')->first();
      $slugmenu6 = Category::where('category_slug','thu-thuat-may-tinh')->first();
      $slugmenu7 = Category::where('category_slug','khoa-hoc')->first();
      $slugmenu8 = Category::where('category_slug','share-code')->first();
      $slugmenu9 = Category::where('category_slug','lap-trinh-plugin')->first();
      $slugmenu10 = Category::where('category_slug','wordpress-rest-api')->first();
      $slugmenu11 = Category::where('category_slug','domain-hosting-vps-server')->first();
   	  $data = DB::table('tbl_baidang')->where('baidang_slug',$baidang_slug)->first();
      $quyendangky = 0;
      if($data==true){
            $cate = DB::table('tbl_category')->where('category_id',$data->category_id)->first();
      $them = Baidang::find($data->baidang_id); 
      $bailienquan = DB::table('tbl_baidang')->where('category_id',$data->category_id)->whereNotIn('baidang_id',[$data->baidang_id])->limit(6)->get();
       $dangky = DB::table('tbl_baidang')->where('baidang_name','like','Khóa học%')->get();
       foreach($dangky as $key => $dk){
        if($dk->baidang_name==$data->baidang_name){
          $quyendangky += 1;
            }

         }
      $meta_title = $data->baidang_title;
      $them->baidang_view += 1; 
      $them->save(); 
     
      return view('pages.baidang_chitiet', compact('quyendangky','bailienquan','meta_desc','meta_keywords','meta_title','url_canonical','category','categoryright','baidangnew','xemnhieu','data','cate','slugmenu','slugmenu1','slugmenu2','slugmenu3','slugmenu4','slugmenu5','slugmenu6','slugmenu7','slugmenu8','slugmenu9','slugmenu10','slugmenu11','noibatfooter'));
      }else{
      $slug = DB::table('tbl_category')->where('category_slug',$baidang_slug)->first(); 
       $databaidang = DB::table('tbl_baidang')->where('category_id',$slug->category_id)->paginate(15); 
       $meta_title = $slug->category_title;
       
       return view('pages.wpcoban', compact('meta_desc','meta_keywords','meta_title','url_canonical','category','categoryright','baidangnew','xemnhieu','slug','slugmenu','databaidang','slugmenu1','slugmenu2','slugmenu3','slugmenu4','slugmenu5','slugmenu6','slugmenu7','slugmenu8','slugmenu9','slugmenu10','slugmenu11','noibatfooter'));

      }
     
      }
   public function index(){
        
   }

   public function gioithieu(Request $request){
         $meta_desc = ""; 
        $meta_keywords = "";
        $meta_title = "";
        $url_canonical = $request->url();
        $categoryright = DB::table('tbl_category')->leftJoin('tbl_baidang','tbl_category.category_id','=','tbl_baidang.category_id')->select('tbl_category.*', DB::raw('count(tbl_baidang.baidang_name) as dem'))->groupBy('tbl_category.category_id')->get();
         $noibatfooter = DB::table('tbl_baidang')->orderby('baidang_view','desc')->limit(3)->get();
         $category = DB::table('tbl_category')->get();
         $baidangnew = DB::table('tbl_baidang')->orderby('baidang_id','desc')->limit(5)->get();
         $xemnhieu = DB::table('tbl_baidang')->orderby('baidang_view','desc')->limit(5)->get();
               $slugmenu = Category::where('category_slug','wordpress-co-ban')->first();
      $slugmenu1 = Category::where('category_slug','lap-trinh-theme')->first();
      $slugmenu2 = Category::where('category_slug','huong-dan-woocommerce')->first();
      $slugmenu3 = Category::where('category_slug','huong-dan-flatsome')->first();
      $slugmenu4 = Category::where('category_slug','thu-thuat')->first();
      $slugmenu5 = Category::where('category_slug','thu-thuat-seo')->first();
      $slugmenu6 = Category::where('category_slug','thu-thuat-may-tinh')->first();
      $slugmenu7 = Category::where('category_slug','khoa-hoc')->first();
      $slugmenu8 = Category::where('category_slug','share-code')->first();
      $slugmenu9 = Category::where('category_slug','lap-trinh-plugin')->first();
      $slugmenu10 = Category::where('category_slug','wordpress-rest-api')->first();
      $slugmenu11 = Category::where('category_slug','domain-hosting-vps-server')->first();

    return view('pages.gioithieu', compact('meta_desc','meta_keywords','meta_title','url_canonical','baidangnew','category','categoryright','xemnhieu','slugmenu','slugmenu1','slugmenu2','slugmenu3','slugmenu4','slugmenu5','slugmenu6','slugmenu7','slugmenu8','slugmenu9','slugmenu10','slugmenu11','noibatfooter'));
   }
   public function nav_menu($category_slug){
      $category = DB::table('tbl_category')->get();
     $baidangnew = DB::table('tbl_baidang')->orderby('baidang_id','desc')->get();
     $xemnhieu = DB::table('tbl_baidang')->orderby('baidang_view','desc')->get();

     $show = DB::table('tbl_category')->where('category_slug',$category_slug)->first();
     $data = DB::table('tbl_baidang')->where('category_id',$show->category_id)->get();
    return view('pages.wpcoban')->with('category',$category)->with('bainew',$baidangnew)->with('xemnhieu',$xemnhieu)->with('data',$data)->with('slug',$category_slug); 
   }
   public function wpthem(){
      $category = DB::table('tbl_category')->get();
     $baidangnew = DB::table('tbl_baidang')->orderby('baidang_id','desc')->get();
     $xemnhieu = DB::table('tbl_baidang')->orderby('baidang_view','desc')->get();

     $wordpress = DB::table('tbl_category')->join('tbl_baidang','tbl_baidang.category_id','=','tbl_category.category_id')->where('category_name','Lập trình theme wordpress')->where('tbl_baidang.baidang_status',0)->get();
    return view('pages.wpcoban')->with('category',$category)->with('bainew',$baidangnew)->with('xemnhieu',$xemnhieu)->with('wp',$wordpress); 
   }
    
}
