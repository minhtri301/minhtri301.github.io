@extends('admin_home')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật bài đăng
            </header>
                <?php 
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }

                ?>
            <div class="panel-body">
          
                <div class="position-center">
                    <form role="form" action="{{URL::to('/update-baidang/'.$data->baidang_id)}}" method="post" enctype="multipart/form-data" >
                           @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên bài đăng</label>
                            <input type="text" name="baidang_name" class="form-control" id="exampleInputEmail1" value="{{$data->baidang_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung</label>
                            <textarea style="resize: none" rows="8" class="form-control" name="baidang_content" id="ckeditor" >{{$data->baidang_content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hình ảnh bìa </label>
                           <input type="file" name="baidang_image" class="form-control" id="exampleInputEmail1" >
                            <img src="{{asset('public/uploads/'.$data->baidang_image)}}" >
                       </input>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Slug</label>
                            <textarea style="resize: none" rows="1" class="form-control" name="baidang_slug" id="exampleInputPassword1"  >{{$data->baidang_slug}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">mô tả bài đăng</label>
                            <textarea style="resize: none" rows="1" class="form-control" name="baidang_title" id="exampleInputPassword1" >{{$data->baidang_title}}</textarea>
                        </div>
                         
                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục</label>
                            <select name="category_id" class="form-control input-sm m-bot15">
                                @foreach($category as $key => $cat )
                                @if($data->category_id==$cat->category_id)
                                <option selected value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                                @else
                                <option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                                @endif
                                @endforeach

                            </select>

                               <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="baidang_status" class="form-control input-sm m-bot15">
                                <option value="0">Hiển thị</option>
                                <option value="1">Ẩn</option>

                            </select>
                          
                        </div>


                        <button type="submit" name="update_category" class="btn btn-info">Cập nhật</button>
                    </form>
                </div>
       

            </div>
        </section>

    </div>
    @endsection