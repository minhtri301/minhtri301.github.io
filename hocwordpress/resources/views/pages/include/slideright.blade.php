
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="slideright">
                    <div class="chiamuc">
                        <h3><span>CHUYÊN MỤC</span></h3>
                        <div>
                            <ul>
                              @foreach($categoryright as $key => $cate)
                                <li><i class="fa fa-angle-right"></i>  <a href="{{route('chitiet',$cate->category_slug)}}">  {{$cate->category_name}} ({{$cate->dem}}) </a></li>
                           @endforeach
                            </ul>
                        </div>
                    </div>
                       <div class="chiamuc">
                        <h3><span>XEM THỜI TIẾT</span></h3>
                       <div class="widget-content">
                            <iframe src="https://thoitiet.info/iframe?term=32&amp;days=5&amp;hC=%231a1a1a&amp;hB=%23f7f7f7&amp;bC=%23ffffff&amp;tC=%23707070&amp;lC=%23dddddd" id="widgeturl" width="100%" height="430" scrolling="no" frameborder="0" allowtransparency="true" style="border:none;overflow:hidden;">
                             <!DOCTYPE html><html><head>
                              <meta name="viewport" content="width=device-width">
                              <title>Widget dự báo thời tiết Đà Nẵng</title>
                              <meta name="description" content="Widget dự báo thời tiết Đà Nẵng">
                              <meta name="robots" content="index, follow">
                              <meta name="robots" content="max-image-preview:large">
                              <link rel="canonical" href="https://thoitiet.info/iframe?days=3">
                              <meta property="og:image" content="https://thoitiet.info/wp-content/uploads/2022/06/logothoitiet.info_.jpg">
                              <meta property="og:image:width" content="1200">
                              <meta property="og:image:height" content="628">
                              <meta property="og:title" content="Widget dự báo thời tiết Đà Nẵng">
                              <meta property="og:url" content="https://thoitiet.info/iframe?days=3">
                              <meta property="og:title_name" content="Widget dự báo thời tiết Đà Nẵng">
                              <meta property="og:description" content="Widget dự báo thời tiết Đà Nẵng">
                              <style>
                                body{font-size:.75em;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;margin:0;padding:0;color:#707070}.card{width:auto;border:1px solid #ffffff;background: #fff;}.card-header{background:#f7f7f7;padding:5px 6px}.card-header a{color:#1a1a1a;font-size:110%;font-weight:700;white-space:nowrap;text-decoration:none}.current{display:flex;flex-wrap:wrap;text-align:center;height:80px;border-bottom:1px solid #dddddd;padding-bottom:5px}.temperature{flex:0 0 50%;align-self:center;text-align:center}.temp-current span{font-size:180%}.temperature p{margin:0;padding:0;color:#707070}.temp-description{font-size:100%}.temp-feel{margin:0;padding:0;color:#707070}.description{flex:1 0 0%;align-self:center;text-align:center}.name:first-letter{text-transform:capitalize}.description img{width:80px}.description p{margin:0;padding:0;font-size:110%;color:#707070}#weather-days{width:100%;max-width:100%;overflow:hidden;border-collapse:collapse}#weather-days img{width:40px}#weather-days td{padding:4px;width:33.33%;color:#707070;text-align:center;border-bottom:1px solid #dddddd}.card-footer{text-align:right}.logo{padding:5px 10px}.logo img{width:50px}
                              </style>
                            </head>
                            <body data-rsssl="1">
                              <div class="card">
                                <div class="card-header">
                                  <a href="https://thoitiet.info/da-nang" target="_blank">Dự báo thời tiết Đà Nẵng</a>
                                </div>
                                <div class="card-body">
                                  <div class="current">
                                    <div class="temperature">
                                      <p title="" class="temp-current">
                                        <span title="Nhiệt độ hiện tại">
                                          28°/
                                        </span>
                                        <span title="Cảm thấy như">
                                          31°
                                        </span>
                                      </p>
                                      <p class="temp-description">
                                        Mây thưa
                                      </p>
                                    </div>
                                    <div class="description">
                                      <img src="https://thoitiet.info/wp-content/themes/thoitiet/assets/images/weather/03d.png" alt="Mây thưa" title="Mây thưa">
                                    </div>
                                  </div>
                                  <table id="weather-days">
                                    <tbody><tr>
                                      <td>
                                        T6<br>Ngày 02/12                        
                                      </td>
                                      <td>
                                        <img src="https://thoitiet.info/wp-content/themes/thoitiet/assets/images/weather/10d.png" alt="Mưa vừa" title="mưa vừa">
                                      </td>
                                      <td>
                                        <div class="temp">
                                          24° | 25°
                                        </div>
                                        <div class="name">
                                        mưa vừa                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        T7<br>Ngày 03/12                        
                                      </td>
                                      <td>
                                        <img src="https://thoitiet.info/wp-content/themes/thoitiet/assets/images/weather/10d.png" alt="Mưa vừa" title="mưa vừa">
                                      </td>
                                      <td>
                                        <div class="temp">
                                          24° | 25°
                                        </div>
                                        <div class="name">
                                        mưa vừa                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        CN<br>Ngày 04/12                        
                                      </td>
                                      <td>
                                        <img src="https://thoitiet.info/wp-content/themes/thoitiet/assets/images/weather/10d.png" alt="Mưa vừa" title="mưa nhẹ">
                                      </td>
                                      <td>
                                        <div class="temp">
                                          24° | 26°
                                        </div>
                                        <div class="name">
                                        mưa nhẹ                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        T2<br>Ngày 05/12                        
                                      </td>
                                      <td>
                                        <img src="https://thoitiet.info/wp-content/themes/thoitiet/assets/images/weather/10d.png" alt="Mưa vừa" title="mưa vừa">
                                      </td>
                                      <td>
                                        <div class="temp">
                                          24° | 26°
                                        </div>
                                        <div class="name">
                                        mưa vừa                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        T3<br>Ngày 06/12                        
                                      </td>
                                      <td>
                                        <img src="https://thoitiet.info/wp-content/themes/thoitiet/assets/images/weather/10d.png" alt="Mưa vừa" title="mưa vừa">
                                      </td>
                                      <td>
                                        <div class="temp">
                                          24° | 25°
                                        </div>
                                        <div class="name">
                                        mưa vừa                        </div>
                                      </td>
                                    </tr>
                                  </tbody></table>
                                </div>
                                <div class="card-footer">
                                  <div class="logo">
                                    <a href="https://thoitiet.info" target="_blank">
                                      <img src="https://thoitiet.info/wp-content/themes/thoitiet/assets/images/icon/logo.png" alt="Dự báo thời tiết">
                                    </a>
                                  </div>
                                </div>
                              </div>





                            </body></html><!-- Dynamic page generated in 0.048 seconds. --><!-- Cached page generated by WP-Super-Cache on 2022-12-01 16:53:37 -->
                          </iframe>
                     </div>
                    </div>

                     <div class="chiamuc">
                        <h3><span>DÙNG THỬ</span></h3>
                        <div>
                           <a href="https://azdigi.com/"><img src="{{asset('public/uploads/476x249-openvz-vps-ssd.png')}}"></a>
                        </div>
                    </div>

                     <div class="chiamuc">
                         <div>
                        <h3><span>MỚI NHẤT</span></h3>
                        <div class="widget-content w-news">
                          <ul>
                            @foreach($baidangnew as $key => $new)
                            <li>
                            
                             <a href="{{route('chitiet',$new->baidang_slug)}}"><img src="{{asset('public/uploads/'.$new->baidang_image)}}"></a> 
                              
                              <h4><a href="{{route('chitiet',$new->baidang_slug)}}" >{{$new->baidang_name}}</a></h4> @if($new->baidang_view==null)
                              <span>0 lượt xem</span>
                              @else
                              <span>{{$new->baidang_view}} lượt xem</span>
                              @endif
                       
                              <div class="clear"></div>
                            
                             
                            </li>
                                @endforeach

                           </ul>
                         </div>
                       </div>
                   
                        </div>
                    

                     <div class="chiamuc">
                      <div>
                        <h3><span>Xem nhiều</span></h3>
                         <div class="widget-content w-news">
                          <ul>
                              @foreach($xemnhieu as $key => $xem)
                              @if($xem->baidang_view>0)
                            <li>
                              <a href="{{route('chitiet',$xem->baidang_slug)}}"><img src="{{asset('public/uploads/'.$xem->baidang_image)}}" alt=""></a> 
                              <h4><a href="{{route('chitiet',$xem->baidang_slug)}}" title="">{{$xem->baidang_name}}</a></h4>
                               @if($xem->baidang_view==null)
                              <span>0 lượt xem</span>
                              @else
                              <span>{{$xem->baidang_view}} lượt xem</span>
                              @endif
                              <div class="clear"></div>
                            </li>
                            @endif
                            @endforeach
                          </ul>
                        </div>
                        </div>
                     
                          
                          
                            <li>
                              <div class="mucnho">
                              <a href=""><img src=""></a>
                              <div class="chia2">
                              <h4><a href=""></a></h4>
                              <span></span>
                              </div>
                              </div>
                            </li>
                            
                  
                    </div>

                    <div class="chiamuc">
                        <h3><span>HOSTING WORDPRESS</span></h3>
                        <div>
                           <a href="https://azdigi.com/"><img src="{{asset('public/uploads/476x249-wordpress-hosting-text.png')}}"></a>
                        </div>
                    </div>

                    <div class="chiamuc">
                        <h3><span>BẠN BÈ</span></h3>
                        <div class="thecuoi">
                           <i class="fa fa-angle-right"></i>
                           <a href="https://hoclaravel.vn">Học Laravel</a>
                        </div>
                         <div class="thecuoi">
                           <i class="fa fa-angle-right"></i>
                           <a href="https://fuvavi.com/">Blog Fuvavi</a>
                        </div>
                         <div class="thecuoi">
                           <i class="fa fa-angle-right"></i>
                           <a href="https://didauchillout.com/">Đi đâu chil out</a>
                        </div>
                         <div class="thecuoi">
                           <i class="fa fa-angle-right"></i>
                           <a href="https://tracnghiem.vn">Trắc nghiệm Online</a>
                        </div> 

                    </div>
                </div>
            </div>