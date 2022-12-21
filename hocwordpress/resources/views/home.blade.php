<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    <link  rel="icon" type="image/x-icon" href="" />

      <!--     <meta property="og:image" content="" /> -->
      <meta property="og:site_name" content="http://localhost:8083/hocwordpress/" />
      <meta property="og:description" content="{{$meta_desc}}" />
      <meta property="og:title" content="{{$meta_title}}" />
      <meta property="og:url" content="{{$url_canonical}}" />
      <meta property="og:type" content="website" />


 
    
    <link rel="shortcut icon" type="image/png" href="https://hocwordpress.vn/wp-content/uploads/2020/03/cropped-hocwordpress-icon-192x192.png">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/vendors.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/main.min.css')}}">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <title>{{$meta_title}}</title>
    <style type="text/css">
        .owl-carousel {
          display: none;
          width: 100%;
          -webkit-tap-highlight-color: transparent;
          /* position relative and z-index fix webkit rendering fonts issue */
          position: relative;
          z-index: 1; }
          .owl-carousel .owl-stage {
            position: relative;
            -ms-touch-action: pan-Y;
            touch-action: manipulation;
            -moz-backface-visibility: hidden;
            /* fix firefox animation glitch */ }
          .owl-carousel .owl-stage:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0; }
          .owl-carousel .owl-stage-outer {
            position: relative;
            overflow: hidden;
            /* fix for flashing background */
            -webkit-transform: translate3d(0px, 0px, 0px); }
          .owl-carousel .owl-wrapper,
          .owl-carousel .owl-item {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0); }
          .owl-carousel .owl-item {
            position: relative;
            min-height: 1px;
            float: left;
            -webkit-backface-visibility: hidden;
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none; }
          .owl-carousel .owl-item img {
            display: block;
            width: 100%; }
          .owl-carousel .owl-nav.disabled,
          .owl-carousel .owl-dots.disabled {
            display: none; }
          .owl-carousel .owl-nav .owl-prev,
          .owl-carousel .owl-nav .owl-next,
          .owl-carousel .owl-dot {
            cursor: pointer;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none; }
          .owl-carousel .owl-nav button.owl-prev,
          .owl-carousel .owl-nav button.owl-next,
          .owl-carousel button.owl-dot {
            background: none;
            color: inherit;
            border: none;
            padding: 0 !important;
            font: inherit; }
          .owl-carousel.owl-loaded {
            display: block; }
          .owl-carousel.owl-loading {
            opacity: 0;
            display: block; }
          .owl-carousel.owl-hidden {
            opacity: 0; }
          .owl-carousel.owl-refresh .owl-item {
            visibility: hidden; }
          .owl-carousel.owl-drag .owl-item {
            -ms-touch-action: pan-y;
                touch-action: pan-y;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none; }
          .owl-carousel.owl-grab {
            cursor: move;
            cursor: grab; }
          .owl-carousel.owl-rtl {
            direction: rtl; }
          .owl-carousel.owl-rtl .owl-item {
            float: right; }

        /* No Js */
        .no-js .owl-carousel {
          display: block; }

        /*
         *  Owl Carousel - Animate Plugin
         */
        .owl-carousel .animated {
          animation-duration: 1000ms;
          animation-fill-mode: both; }

        .owl-carousel .owl-animated-in {
          z-index: 0; }

        .owl-carousel .owl-animated-out {
          z-index: 1; }

        .owl-carousel .fadeOut {
          animation-name: fadeOut; }

        @keyframes fadeOut {
          0% {
            opacity: 1; }
          100% {
            opacity: 0; } }

        /*
         *  Owl Carousel - Auto Height Plugin
         */
        .owl-height {
          transition: height 500ms ease-in-out; }

        /*
         *  Owl Carousel - Lazy Load Plugin
         */
        .owl-carousel .owl-item {
          /**
                    This is introduced due to a bug in IE11 where lazy loading combined with autoheight plugin causes a wrong
                    calculation of the height of the owl-item that breaks page layouts
                 */ }
          .owl-carousel .owl-item .owl-lazy {
            opacity: 0;
            transition: opacity 400ms ease; }
          .owl-carousel .owl-item .owl-lazy[src^=""], .owl-carousel .owl-item .owl-lazy:not([src]) {
            max-height: 0; }
          .owl-carousel .owl-item img.owl-lazy {
            transform-style: preserve-3d; }

        /*
         *  Owl Carousel - Video Plugin
         */
        .owl-carousel .owl-video-wrapper {
          position: relative;
          height: 100%;
          background: #000; }

        .owl-carousel .owl-video-play-icon {
          position: absolute;
          height: 80px;
          width: 80px;
          left: 50%;
          top: 50%;
          margin-left: -40px;
          margin-top: -40px;
          background: url(4a37f8008959c75f619bf0a3a4e2d7a2.png) no-repeat;
          cursor: pointer;
          z-index: 1;
          -webkit-backface-visibility: hidden;
          transition: transform 100ms ease; }

        .owl-carousel .owl-video-play-icon:hover {
          -ms-transform: scale(1.3, 1.3);
              transform: scale(1.3, 1.3); }

        .owl-carousel .owl-video-playing .owl-video-tn,
        .owl-carousel .owl-video-playing .owl-video-play-icon {
          display: none; }

        .owl-carousel .owl-video-tn {
          opacity: 0;
          height: 100%;
          background-position: center center;
          background-repeat: no-repeat;
          background-size: contain;
          transition: opacity 400ms ease; }

        .owl-carousel .owl-video-frame {
          position: relative;
          z-index: 1;
          height: 100%;
          width: 100%; }
</style>
<style type="text/css">
        /**
         * Owl Carousel v2.3.4
         * Copyright 2013-2018 David Deutsch
         * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
         */
        /*
         *  Default theme - Owl Carousel CSS File
         */
        .owl-theme .owl-nav {
          margin-top: 10px;
          text-align: center;
          -webkit-tap-highlight-color: transparent; }
          .owl-theme .owl-nav [class*='owl-'] {
            color: #FFF;
            font-size: 14px;
            margin: 5px;
            padding: 4px 7px;
            background: #D6D6D6;
            display: inline-block;
            cursor: pointer;
            border-radius: 3px; }
            .owl-theme .owl-nav [class*='owl-']:hover {
              background: #869791;
              color: #FFF;
              text-decoration: none; }
          .owl-theme .owl-nav .disabled {
            opacity: 0.5;
            cursor: default; }

        .owl-theme .owl-nav.disabled + .owl-dots {
          margin-top: 10px; }

        .owl-theme .owl-dots {
          text-align: center;
          -webkit-tap-highlight-color: transparent; }
          .owl-theme .owl-dots .owl-dot {
            display: inline-block;
            zoom: 1;
            *display: inline; }
            .owl-theme .owl-dots .owl-dot span {
              width: 10px;
              height: 10px;
              margin: 5px 7px;
              background: #D6D6D6;
              display: block;
              -webkit-backface-visibility: visible;
              transition: opacity 200ms ease;
              border-radius: 30px; }
            .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
              background: #869791; }
</style>
</head>
<body class="home">
<div id="app">
    <header>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <form action="" method="">
                            <div class="search">
                                <i class="fas fa-search"></i>
                                <input class="input-serach" type="" name="" placeholder="Từ khóa ......">
                            </div>
                        </form>
                    </div>

                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                         <div class="top-social">
                             <a href="https://facebook.com/hocwordpressdotvn" target="_blank" rel="noreferrer">
                                 <i class="fab fa-facebook-f"></i>
                             </a>
                             <a href="https://twitter.com/huykira" target="_blank" rel="noreferrer">
                                <i class="fab fa-twitter"></i>
                             </a>
                             <a href="https://instagram.com/huykira" target="_blank" rel="noreferrer">
                                 <i class="fab fa-instagram"></i>
                             </a>
                             <a href="https://youtube.com/huykira" target="_blank" rel="noreferrer">
                                <i class="fab fa-youtube"></i>
                             </a>
                         </div>
                     </div>
                    
                </div>
            </div>
        </div>

        <div class="main-header">
            <div class="container">
                <div class="logo">
                    <a href="">
                        <img src="https://hocwordpress.vn/wp-content/uploads/2020/03/hocwordpress.png">
                    </a>
                 </div>

             </div>
        </div>
        <div class="main-menu">
            <div class="container">
            <div class="content-menu">
              <ul>
                {{-- {{dd($nhan->category_slug)}} --}}
                <li><a href="{{URL::to('/trangchu')}}">TRANG CHỦ</a></li>
                <li><a href="{{URL::to('/gioithieu')}}">GIỚI THIỆU</a></li>
                <li><a href="{{route('chitiet',$slugmenu->category_slug)}}">WP CƠ BẢN</a></li>
                
                <li><a href="{{route('chitiet',$slugmenu1->category_slug)}}">WP THEME</a></li>
                <li><a href="{{route('chitiet',$slugmenu2->category_slug)}}">WOOCOMMERCE <i class="fa fa-angle-down"></i></a>
                  <ul class="sub-menu">
                          <li class=""><a href="{{route('chitiet',$slugmenu3->category_slug)}}">Hướng dẫn Flatsome</a></li>
                        </ul>
                </li>
                <li><a href="">THỦ THUẬT <i class="fa fa-angle-down"></i></a>
                  <ul class="sub-menu">
                          <li class=""><a href="{{route('chitiet',$slugmenu4->category_slug)}}">Thủ thuật wordpress</a></li>
                          <li class=""><a href="{{route('chitiet',$slugmenu5->category_slug)}}">Thủ thuật SEO</a></li>
                          <li class=""><a href="{{route('chitiet',$slugmenu6->category_slug)}}">Thủ thuật máy tính</a></li>
                        </ul>
                </li>
                <li><a href="{{route('chitiet',$slugmenu7->category_slug)}}">KHÓA HỌC</a></li>
                <li><a href="">MỤC KHÁC <i class="fa fa-angle-down"></i></a>
                   <ul class="sub-menu">
                          <li class=""><a href="{{route('chitiet',$slugmenu8->category_slug)}}">Share code</a></li>
                          <li class=""><a href="{{route('chitiet',$slugmenu9->category_slug)}}">WP plugin</a></li>
                          <li class=""><a href="{{route('chitiet',$slugmenu10->category_slug)}}">WP rest API</a></li>
                          <li class=""><a href="{{route('chitiet',$slugmenu11->category_slug)}}">Tên miền & Hosting, Server</a></li>
                        </ul>
                 </li>
                <li><a href="">LIÊN HỆ</a></li>


              </ul>
             

             </div>
            </div>
        </div>
    </header>

   <div id="content" >
      @yield('home_content')
      @include('pages.include.slideright')
        </div>

         
  </div>
     </div>


</div>
     @include('pages.include.footer')
   

</div>
     @include('pages.include.jquery')
</body>
</html>