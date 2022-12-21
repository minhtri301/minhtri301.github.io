@extends('admin_home')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật danh mục khóa học
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
                    <form role="form" action="{{URL::to('/update-category/'.$category->category_id)}}" method="post">
                           @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" value="{{$category->category_name}}" name="category_name" class="form-control" id="exampleInputEmail1">
                        </div>
                       <div class="form-group">
                            <label for="exampleInputEmail1">slug</label>
                            <input type="text" value="{{$category->category_slug}}" name="category_slug" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">mô tả danh mục</label>
                            <textarea style="resize: none" rows="8" class="form-control" name="category_title" id="exampleInputPassword1" >{{$category->category_title}}</textarea>
                        </div>

                        <button type="submit" name="update_category" class="btn btn-info">Cập nhật</button>
                    </form>
                </div>
       

            </div>
        </section>

    </div>
    @endsection