<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistem Penunjang Keputusan</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="{{ url('assetswelcome/css/bootstrap.min.css') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ url('assetswelcome/css/style.css') }}">
        <!-- Responsive-->
        <link rel="stylesheet" href="{{ url('assetswelcome/css/responsive.css') }}">
        <!-- fevicon -->
        <link rel="icon" href="{{ url('assetswelcome/images/fevicon.png') }}" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="{{ url('assetswelcome/css/jquery.mCustomScrollbar.min.css') }}">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- owl stylesheets --> 
        <link rel="stylesheet" href="{{ url('assetswelcome/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ url('assetswelcome/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <!--header section start -->
    <div class="header_section">
      <div class="header_left">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo"><a href="{{ url('assetswelcome/index.html') }}"><img src="{{ url('assetswelcome/images/logo.png') }}"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('assetswelcome/about.html') }}">Tentang</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="banner_main">
          <h1 class="banner_taital">Sistem <br>Penunjang <br>Keputusan </h1> 
          <p class="banner_text">sistem Penunjang Keputusan Pemilihan komponen komputer <br> Sistem ini merupakan uji coba dalam menentukan pemilihan komponen komputer yang layak digunakan untuk kegiatan streamer </p>
          <div class="btn_main">
            <div class="more_bt"><a href="{{ route('login') }}">Mulai </a></div>
            <div class="contact_bt"><a href="mailto:191210096@student.mercubuana-yogya.ac.id">Contact Us</a></div>
          </div>
        </div>
      </div>
      <div class="header_right">
        <img src="{{ url('assetswelcome/images/banner-img.png') }}" class="banner_img">
        <div>
              @if (Route::has('login'))
              <div class="hidden top-0 right-0 px-6 py-4 sm:block">
                  @auth
                  @else
                      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="position:absolute; top: 8px; right: 16px;px">Log in</a>
                  @endauth
              </div>
              @endif
        </div>
      </div>
    </div>
    <!--header section end -->
    <!--about section start -->
    <div class="services_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="services_taital">WELCOME TO FINAnCIAL SERVICES</h1>
            <p class="services_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it </p>
            <div class="moremore_bt"><a href="#">Read More </a></div>
          </div>
          <div class="col-md-4">
            <div><img src="{{ url('assetswelcome/images/img-1.png') }}" class="image_1"></div>
          </div>
        </div>
      </div>
    </div>
    <!--about section end -->
    <!--services section start -->
    <div class="what_we_do_section layout_padding">
      <div class="container">
        <h1 class="what_taital">YANG KAMI LAKUKAN</h1>
        <p class="what_text">Kami memberikan layanan saran komponen komputer untuk anda yang ingin melakukan kegiatan live stream </p>
        <div class="what_we_do_section_2">
          <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="box_main">
              <div class="icon_1"><img src="{{ url('assetswelcome/images/icon-1.png') }}"></div>
              <h3 class="accounting_text">Biaya</h3>
              <p class="lorem_text">Rentang biaya yang diperlukan oleh calon streamer</p>
              <div class="moremore_bt_1"><a href="#">Mulai </a></div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box_main active">
              <div class="icon_1"><img src="{{ url('assetswelcome/images/icon-2.png') }}"></div>
              <h3 class="accounting_text">Advisor</h3>
              <p class="lorem_text">Lorem Ipsum is simply dummy text of the printing and</p>
              <div class="moremore_bt_1"><a href="#">Read More </a></div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box_main">
              <div class="icon_1"><img src="{{ url('assetswelcome/images/icon-3.png') }}"></div>
              <h3 class="accounting_text">Investment</h3>
              <p class="lorem_text">Lorem Ipsum is simply dummy text of the printing and</p>
              <div class="moremore_bt_1"><a href="#">Read More </a></div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box_main">
              <div class="icon_1"><img src="{{ url('assetswelcome/images/icon-4.png') }}"></div>
              <h3 class="accounting_text">Hasil</h3>
              <p class="lorem_text">Hasil daftar saran komponen komputer yang akan dirakit </p>
              <div class="moremore_bt_1"><a href="#">Lihat </a></div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!--services section end -->
    <!--client section start -->
    <div class="client_section layout_padding">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <h1 class="what_taital">what is says our clients</h1>
              <div class="client_section_2 layout_padding">
                <ul>
                  <li><img src="{{ url('assetswelcome/images/round-1.png') }}" class="round_1"></li>
                  <li><img src="{{ url('assetswelcome/images/img-11.png') }}" class="image_11"></li>
                  <li><img src="{{ url('assetswelcome/images/round-2.png') }}" class="round_2"></li>
                </ul>
                <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
              </div>
            </div>
            <div class="carousel-item">
              <h1 class="what_taital">what is says our clients</h1>
              <div class="client_section_2 layout_padding">
                <ul>
                  <li><img src="{{ url('assetswelcome/images/round-1.png') }}" class="round_1"></li>
                  <li><img src="{{ url('assetswelcome/images/img-11.png') }}" class="image_11"></li>
                  <li><img src="{{ url('assetswelcome/images/round-2.png') }}" class="round_2"></li>
                </ul>
                <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
              </div>
            </div>
            <div class="carousel-item">
              <h1 class="what_taital">what is says our clients</h1>
              <div class="client_section_2 layout_padding">
                <ul>
                  <li><img src="{{ url('assetswelcome/images/round-1.png') }}" class="round_1"></li>
                  <li><img src="{{ url('assetswelcome/images/img-11.png') }}" class="image_11"></li>
                  <li><img src="{{ url('assetswelcome/images/round-2.png') }}" class="round_2"></li>
                </ul>
                <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--client section end -->
    <!--footer section start -->
    <div class="footer_section layout_padding">
        <div class="copyright_text">Copyright 2022 All Right Reserved By Wahyu Ajitomo</div>
    </div>
    <!--footer section end -->
    <!-- Javascript files-->
    <script src="{{ url('assetswelcome/js/jquery.min.js') }}"></script>
    <script src="{{ url('assetswelcome/js/popper.min.js') }}"></script>
    <script src="{{ url('assetswelcome/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assetswelcome/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ url('assetswelcome/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ url('assetswelcome/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ url('assetswelcome/js/custom.js') }}"></script>
    <!-- javascript --> 
    <script src="{{ url('assetswelcome/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js') }}"></script>
    </body>
</html>