@extends('home')
@section('home_content')

<div class="breadcrumbs">
  <div class="container"><i class="fa fa-home"></i>
   <span><span><a href="{{URL::to('/trangchu')}}">Trang chủ</a></span> <i class="fa fa-angle-double-right"></i> 
   <span aria-current="page" class="breadcrumb_last">{{$cate->category_name}}</span> <i class="fa fa-angle-double-right"></i>  <span aria-current="page" class="breadcrumb_last">{{$data->baidang_name}}</span></span>
 </div>
</div>
<div class="main-content">
 <div class="container">



  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8" style="height: auto !important;">
      <div class="content-box-news" style="height: auto !important;">
        <h1 class="single-title">{{$data->baidang_name}}</h1>
        <div class="meta-single">
          <span>Ngày đăng: {{date('d - m - Y', strtotime($data->created_at))}}</span>
          @if($data->baidang_view==null)
          <span>0 lượt xem</span>
          @else
          <span>Lượt xem: {{$data->baidang_view}} lượt </span>
          @endif
        </div>

        <article class="post-content" style="height: auto !important;">
         {!!$data->baidang_content!!}
       </article>

       <?php if($quyendangky > 0){ ?>
        <div class="row">
          <p class="dk"><span style="color: rgb(0, 128, 0);"><strong>ĐĂNG KÝ KHÓA HỌC TẠI ĐÂY</strong></span></p>
          <form action="{{URL::to('/dangky')}}" method="post" class="formdangky">
            @csrf
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationDefault01">Họ và Tên *:</label>
                <input type="text" name="dangky_name" class="form-control" id="validationDefault01" placeholder="Họ và tên" required>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefault02">Email của bạn *:</label>
                <input type="email" name="dangky_email" class="form-control" id="validationDefault02" placeholder="Địa chỉ email"  required>
                <i style="font-size: 13">Vui lòng nhập chính xác email để được nhận tài liệu khi tham gia khóa học!</i>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefault02">SĐT của bạn *:</label>
                <input type="text" name="dangky_phone" class="form-control" id="validationDefault02" placeholder="Số điện thoại"  required>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefault02">Facebook:</label>
                <input type="text" name="dangky_fb" class="form-control" id="validationDefault02" placeholder="Facebook của bạn"  >
                <i style="font-size: 13">Bạn có thể nhập link hoặc username facebook</i>
              </div>
              
              <div class="col-md-12 mb-3">
                <label for="validationDefault02">Các thông tin khác:</label></br>
                <textarea name="dangky_note" style="width: 100%;border: 1px solid #ced4da;" rows="3" class="form-control"  placeholder="Các kiến thức bạn đã có?"  id="validationDefault02" required></textarea>
              </div>
            </div>
            <input type="hidden" name="dangky_tenkhoahoc" value="{{$data->baidang_name}}">
            <button class="btn btn-primary" type="submit" style="width: 100%">Đăng ký khóa học</button>
          </form>
        </div>
        <?php } ?>

         <div class="rel" style="height: auto !important;">
          <h3>Bài viết liên quan</h3> 
          <div class="rel-content content-box-news" style="height: auto !important;">
            @foreach($bailienquan as $key => $lienquan)
            <div class="list-news">
              <a href="{{route('chitiet',$lienquan->baidang_slug)}}" title=""><img src="{{asset('public/uploads/'.$lienquan->baidang_image)}}" alt=""></a>
               <h4><a href="{{route('chitiet',$lienquan->baidang_slug)}}" title="">{{$lienquan->baidang_name}}</a></h4> 
               <span class="meta">{{date('d - m - Y', strtotime($lienquan->created_at))}}</span> 
               <p class="content-box"><div class="label_title">{!!$lienquan->baidang_content!!}</div></p> 
               <div class="clear">
               </div>
             </div>
             @endforeach
          </div>
        </div>





     </div>

  </div>
  @endsection