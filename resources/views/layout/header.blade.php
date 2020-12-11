<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TLU CONFESSION</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v2.2.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="homepage">TLU CONFESSION</a></h1>
        </div>

      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li><a href="homepage#post">Posts</a></li>
          <li><a href="introduct">Introduce</a></li>
          @role('admin')
          <li><a href="admin/post/danhsachchuaduyet">Admin</a></li>
          @endrole
          <li class="drop-down" style="cursor: pointer;"><a>Menu List</a>
            <ul>
              <li class="drop-down" style="cursor: pointer;"><a>Categories</a>
                <ul>
                 
            @foreach($category as $tl)
            <li>
                <a href="PostbyCategory/{{$tl->id}}">{{ $tl->title}}</a>
             </li>
            @endforeach
         
                </ul>
              </li>
              <li class="drop-down" style="cursor: pointer"><a>Sorted by</a>
                <ul>
                  <li><a href="toplike">Top Likes</a></li>
                  <li><a href="topcomment">Top Comments</a></li>
                  <li><a href="topvote"> Top Votes</a></li>
                </ul>
              </li>
            </ul>
          </li>
            @if(Auth::check())
                    <li>

                        <a href="nguoidung" style="color: white; border: double 2px pink;">

                            <span><img src="image/user.png"></span>
                            {{ Auth::user()->name }}
                        </a>
                    </li>

                    <li>
                          <li><a href="dangxuat">Log Out</a></li>
                    </li>
                @else
                    <li>
                        <a href="register">Đăng ký</a>
                    </li>
                    <li>
                        <a href="dangnhap">Đăng nhập</a>
                    </li>
                @endif
        
        


        </ul>
        
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>