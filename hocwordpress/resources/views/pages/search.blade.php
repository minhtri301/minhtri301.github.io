@extends('home')
@section('home_content')
 
   
    
<div class="breadcrumbs">
  <div class="container"><i class="fa fa-home"></i>
   <span><span><a href="{{URL::to('/trangchu')}}">Trang chủ</a></span> <i class="fa fa-angle-double-right"></i>

    <span aria-current="page" class="breadcrumb_last"></span></span>
   @if($dieukien==1)
      <span aria-current="page" class="breadcrumb_last">{{$keycate->category_name}}</span></span>
    @else
     <span aria-current="page" class="breadcrumb_last">Bạn đã tìm {{$keywork}} </span></span>
    @endif
   
  </div>
</div>
     <div class="main-content">
         <div class="container">
           
       
  
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class="content-box-news">
               <h1 class="category-title">Kết quả tìm kiếm</h1>
               <?php if($checkk > 0){ ?> 
                   
                     @foreach($ketqua as $key)
                 <div class="list-news">
                  <a href="{{route('chitiet',$key->baidang_slug)}}"><img src="{{URL::to('public/uploads/'.$key->baidang_image)}}" alt=""></a>
                   <h4><a href="{{route('chitiet',$key->baidang_slug)}}" title="">{{$key->baidang_name}}</a></h4>
                    <span class="meta">{{date('d - m - Y', strtotime($key->created_at))}}</span>
                     <p class="content-box"><div class="label_title">{{!!$key->baidang_content!!}}</div></p> 
                    <div class="clear"></div>
                  </div>
                 @endforeach
                     
               <?php }else{ ?>
                    <p>Không tìm thấy kết quả nào!</p>
                      
               <?php } ?>
                </div>

              </div>
               
@endsection