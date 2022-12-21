@extends('home')
@section('home_content')
 
<div class="breadcrumbs">
  <div class="container"><i class="fa fa-home"></i>
   <span><span><a href="{{URL::to('/trangchu')}}">Trang chủ</a></span> <i class="fa fa-angle-double-right"></i> 
   <span aria-current="page" class="breadcrumb_last">{{$slug->category_name}}</span> </span>
  </div>
</div>
     <div class="main-content">
         <div class="container">
           
       
  
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
           <div class="content-box-news">
            <h1 class="category-title">{{$slug->category_name}}</h1>
            @foreach($databaidang as $key => $dataa)
            <div class="list-news">
              
              <a href="{{route('chitiet',$dataa->baidang_slug)}}" title=""><img src="{{asset('/public/uploads/'.$dataa->baidang_image)}}" alt=""></a> 
              <h4><a href="{{route('chitiet',$dataa->baidang_slug)}}" title="">{{$dataa->baidang_name}}</a></h4> 
              <span class="meta">{{date('d - m - Y', strtotime($dataa->created_at))}}</span>
               <p><span class="content-box "><div class="label_title">{!!$dataa->baidang_content!!}</div></span></p>
                <div class="clear"></div>

             </div> 
              @endforeach
           </div>
            <footer class="panel-footer" style="background: white;">
                    <div class="row phantrang">
                      {{-- <div class="col-sm-5 text-center"></div> --}}
                      {{-- <div class="col-sm-7 text-right text-center-xs" > --}}
                        <ul class="pagination pagination-sm-m-t-none-m-b-none">
                          {!!$databaidang->links()!!}
                        </ul>
                     {{--  </div> --}}
                    </div>
                  </footer>
            </div>
@endsection