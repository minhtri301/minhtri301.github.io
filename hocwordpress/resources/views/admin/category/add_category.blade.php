@extends('admin_home')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm danh mục khóa học
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
                    <form role="form" action="{{URL::to('/save-category')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Slug</label>
                            <textarea style="resize: none" rows="1" class="form-control" name="category_slug" id="exampleInputPassword1" placeholder="Tên danh mục"  required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">mô tả danh mục</label>
                            <textarea style="resize: none" rows="2" class="form-control" name="category_title" id="exampleInputPassword1" placeholder="Mô tả danh mục" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="category_status" class="form-control input-sm m-bot15">
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