@extends('admin_home')
@section('admin_content')
<div class="table-agile-info">
<div class="panel panel-default">
  <div class="panel-heading">
    Liệt kê học viên đăng ký
  </div>
  
  <div class="table-responsive">
    <?php
    $message = Session::get('message');
    if($message){
      echo '<span class="text-alert">'.$message.'</span>';
      Session::put('message',null);
    }

    ?>
    <table class="table table-striped b-t b-light">
      <thead>
        <tr>
          <th style="width:20px;">
          Stt
          </th>
          <th>Tên người đăng ký</th>
          <th>Khóa học</th>
          <th>email</th>
          <th>phone</th>
          <th>facebook</th>
          <th>thông tin</th>
          <th>Thời gian</th>
          <th style="width:30px;"></th>
        </tr>
      </thead>
      <tbody>
        <?php $stt = 0 ?>
        @foreach($data as $key => $da)

        <tr>
          <td><?php echo($stt += 1) ?></td>
          <td>{{ $da->dangky_name}}</td>
          <td>{{ $da->dangky_tenkhoahoc}}</td>
          <td>{{ $da->dangky_email}}</td>
          <td>{{ $da->dangky_phone}}</td>
          <td>{{ $da->dangky_fb}}</td>
          <td>{{ $da->dangky_note}}</td>
          <td>{{  date('m - d - Y', strtotime($da->created_at))}}</td>
          <td>
           
            <a onclick="return confirm('Bạn có chắc chắn muốn xóa không')" href="{{URL::to('/delete-dangky/'.$da->dangky_id)}}" class="active styling-edit" ui-toggle-class="">  
              <i class="fa fa-times text-danger text"></i></a>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
  <footer class="panel-footer">
    <div class="row">
      
      <div class="col-sm-5 text-center">
        <small class="text-muted inline m-t-sm m-b-sm"></small>
      </div>
      <div class="col-sm-7 text-right text-center-xs">                
        <ul class="pagination pagination-sm-m-t-none-m-b-none">
          {!!$data->links()!!}
        </ul>
      </div>
    </div>
  </footer>
</div>
</div>
@endsection