@extends('admin_home')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm bài đăng
            </header>
               <?php 
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::get('message',null);
                }

                ?>
            <div class="panel-body">
             
                <div class="position-center">
                    <form role="form" action="{{URL::to('/save-baidang')}}" method="post"  enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên bài đăng</label>
                            <input type="text" name="baidang_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung</label>
                            <textarea style="resize: none" rows="8"  class="form-control" name="baidang_content" id="ckeditor" placeholder="Nội dung bài đăng"  required ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hình ảnh bìa </label>
                           <input type="file" name="baidang_image" class="form-control" id="exampleInputEmail1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Slug</label>
                            <textarea style="resize: none" rows="1" class="form-control" name="baidang_slug" id="exampleInputPassword1" placeholder="Tên danh mục" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">mô tả bài đăng</label>
                            <textarea style="resize: none" rows="2" class="form-control" name="baidang_title" id="exampleInputPassword1" placeholder="Mô tả danh mục" required></textarea>
                        </div>
                         
                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục</label>
                            <select name="category_id" class="form-control input-sm m-bot15">
                                @foreach($data as $key => $dat )
                                <option value="{{$dat->category_id}}">{{$dat->category_name}}</option>
                                @endforeach

                            </select>
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="baidang_status" class="form-control input-sm m-bot15">
                                <option value="0">Hiển thị</option>
                                <option value="1">Ẩn</option>

                            </select>
                        </div>

                        <button type="submit" name="add_category" class="btn btn-info">Thêm danh mục</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
    @endsection