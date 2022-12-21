@extends('home')
@section('home_content')

    @include('pages.include.slide')    
     <div class="main-content">
         <div class="container">
             <div class="box-search">
                 <form action="{{route('search')}}" method="get" autocomplete="off">
                    @csrf
                    <div class="content-search">
                        <select name="keywork_cate" id="inputCat">  
                              <option value="">Tất cả</option>
                              @foreach($category as $key => $cat)
                              <option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                              @endforeach
                          </select>
                         <input type="text" name="keywork" id="keywork" placeholder="Từ khóa...."> 
                         <div id="search-keywork" class="returndata"  ></div>
                         <button type="submit"><i class="fas fa-search"></i></button>
                         
                    </div>
                     
                 </form>
             </div>
       
  
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class="khoahoc">
                    <h2 class="title-home"><span>KHÓA HỌC</span></h2>
                    <div class="row">
                      @foreach($data as $key => $bai)
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                          <a href="{{route('chitiet',$bai->baidang_slug)}}"><img src="{{asset('public/uploads/'.$bai->baidang_image)}}"></a>
                          <h4 ><a style="color: #000000;" href="{{route('chitiet',$bai->baidang_slug)}}">{{$bai->baidang_name}}</a></h4>
                          <span id="date">{{date('d - m - Y', strtotime($bai->created_at))}}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="content-box-news" >
                  <h2 class="title-home"><span>Bài viết mới</span></h2>
                  @foreach($baivietmoi as $key => $bvietmoi)
                  <div class="list-news">
                    <a href="{{route('chitiet',$bvietmoi->baidang_slug)}}" title="">
                      <img src="{{asset('public/uploads/'.$bvietmoi->baidang_image)}}" alt=""></a>
                       <h3><a href="{{route('chitiet',$bvietmoi->category_slug)}}" title="">{{$bvietmoi->category_name}}</a></h3>
                        <h4><a href="{{route('chitiet',$bvietmoi->baidang_slug)}}" title="">{{$bvietmoi->baidang_name}}</a></h4> 
                        <span class="meta">{{date('d - m - Y', strtotime($bvietmoi->created_at))}}</span>
                         <div class="label_title">{!!$bvietmoi->baidang_content!!}</div>
                       <div class="clear"></div>
                     </div>
                     @endforeach

                </div>
                   <footer class="panel-footer" style="background: white;">
                    <div class="row phantrang">
                      {{-- <div class="col-sm-5 text-center"></div> --}}
                      {{-- <div class="col-sm-7 text-right text-center-xs" > --}}
                        <ul class="pagination pagination-sm-m-t-none-m-b-none">
                          {!!$baivietmoi->links()!!}
                        </ul>
                     {{--  </div> --}}
                    </div>
                  </footer>
            </div>
@endsection