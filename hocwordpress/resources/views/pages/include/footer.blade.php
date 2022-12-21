<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
        <div class="content-box-footer">
          <h3>Học Wordpress từ a đến z</h3>
           <img src="https://hocwordpress.vn/wp-content/uploads/2020/03/hocwordpress-w.png" alt="Học Wordpress từ a đến z"> 
           <p>Chuyên trang hướng dẫn wordpress từ a đến z. Hướng dẫn wordpress cơ bản, hướng dẫn lập trình theme. Chia sẻ khóa học wordpress miễn phí và có phí.</p> 
           <div class="footer-ocial">
            <a href="https://facebook.com/hocwordpressdotvn" target="_blank" rel="noreferrer"><i style="border: none;color: white;" class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/huykira" target="_blank" rel="noreferrer"><i style="border: none;color: white;" class="fab fa-twitter"></i></a>
             <a href="https://instagram.com/huykira" target="_blank" rel="noreferrer"><i style="border: none;color: white;" class="fab fa-instagram"></i></a> 
             <a href="https://youtube.com/huykira" target="_blank" rel="noreferrer"><i style="border: none;color: white;" class="fab fa-youtube"></i></a>
           </div>
         </div>
       </div> 
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5" >
        <div class="content-box-footer">
          <h3>Chuyên mục</h3> 
          <ul class="list-cat">
          @foreach($categoryright as $key => $cate)
            <li style="float: left;
    width: 50%;">
              <i class="fa fa-angle-right"></i> 
              <a href="{{route('chitiet',$cate->category_slug)}}" title="Thủ thuật wordpress">{{$cate->category_name}}  ({{$cate->dem}}) </a>
            </li>
         @endforeach
          </ul>
        </div>
      </div> 
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3" >
        <div class="content-box-footer">
          <h3>Bài viết nổi bật</h3> 
          <ul class="list-news">
            @foreach($noibatfooter as $key => $noibat)
            <li>
              <h4><a href="{{route('chitiet',$noibat->baidang_slug)}}" alt="">{{$noibat->baidang_name}}</a></h4> 
              <span>{{date('d - m - Y', strtotime($noibat->created_at))}}</span>
            </li>
          @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div> 
  <div class="copyright">
    <p>Copyright © 2020 HOCWORDPRESS All Rights Reserved. Design by Huy Kira</p>
  </div> 
  <div class="back-to-top-footer">
    <div class="vue-back-to-top" style="bottom: 40px; right: 30px;">
      <i class="fa fa-angle-up"></i>
    </div>
  </div> 
  <div><!----><!---->
    
  </div>
  <div class="bottom-mobile">
    <div class="content-bar">
      <div class="item-bar">
        <i class="fa fa-bars"></i> 
        <span>Menu</span></div> 
        <div class="item-bar">
          <i class="fa fa-share-alt-square"></i> 
          <span>Chia sẻ</span></div> 
          <div class="item-bar">
            <a href="/"><i class="fa fa-home"></i> 
              <span>Trang chủ</span>
            </a>
          </div> 
          <div class="item-bar">
            <a href="/lien-he"><i class="fa fa-envelope"></i> 
              <span>Liên hệ</span></a></div> <div class="item-bar">
                <div class="vue-back-to-top" style="bottom: 40px; right: 30px;">
                  <i class="fa fa-arrow-circle-up">
                    
                  </i> 
                  <span>Lên đầu</span>
                </div></div> 
                <div class="clear">
                  
                </div>
              </div>
            </div>
</footer>