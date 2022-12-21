{{-- @extends('home')
@section('home_content')
 
<div class="breadcrumbs">
  <div class="container"><i class="fa fa-home"></i>
   <span><span><a href="">Trang chủ</a></span> <i class="fa fa-angle-double-right"></i> 
   <span aria-current="page" class="breadcrumb_last">Lập trình theme wordpress</span> </span>
  </div>
</div>
     <div class="main-content">
         <div class="container">
           
       
  
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
           <div class="content-box-news">
            <h1 class="category-title">Wordpress cơ bản</h1>
            @foreach($wp as $key => $wpress)
            <div class="list-news">
              
              <a href="" title="Htaccess Wordpess là gì? hướng dẫn tạo file .htaccess đơn giản"><img src="{{asset('/public/uploads/'.$wpress->baidang_image)}}" alt=""></a> 
              <h4><a href="" title="Htaccess Wordpess là gì? hướng dẫn tạo file .htaccess đơn giản">{{$wpress->baidang_name}}</a></h4> 
              <span class="meta">{{date('d - m - Y', strtotime($wpress->created_at))}}</span>
               <p><span class="content-box "><div class="label_title">{{!!$wpress->baidang_content!!}}</div></span></p>
                <div class="clear"></div>

             </div> 
              @endforeach
           </div>
            </div>
@endsection --}}