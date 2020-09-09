<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Guruboss</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fontpage')}}/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontpage')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontpage')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontpage')}}/assets/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('frontpage')}}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('frontpage')}}/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="{{ asset('frontpage')}}/assets/css/gijgo.css">
    <link rel="stylesheet" href="{{ asset('frontpage')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontpage')}}/assets/css/animated-headline.css">
    <link rel="stylesheet" href="{{ asset('frontpage')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontpage')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('frontpage')}}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('frontpage')}}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontpage')}}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('frontpage')}}/assets/css/style.css">
    
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
   
    @include('frontpage.header.header')
    

        @yield('content')

    @include('frontpage.footer.footer')



    
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="{{ asset('frontpage')}}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('frontpage')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{ asset('frontpage')}}/assets/js/popper.min.js"></script>
<script src="{{ asset('frontpage')}}/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('frontpage')}}/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('frontpage')}}/assets/js/owl.carousel.min.js"></script>
<script src="{{ asset('frontpage')}}/assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('frontpage')}}/assets/js/wow.min.js"></script>
<script src="{{ asset('frontpage')}}/assets/js/animated.headline.js"></script>
<script src="{{ asset('frontpage')}}/assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="{{ asset('frontpage')}}/assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="{{ asset('frontpage')}}/assets/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('frontpage')}}/assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="{{ asset('frontpage')}}/assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{ asset('frontpage')}}/assets/js/jquery.counterup.min.js"></script>
<script src="{{ asset('frontpage')}}/assets/js/waypoints.min.js"></script>
<script src="{{ asset('frontpage')}}/assets/js/jquery.countdown.min.js"></script>
<script src="{{ asset('frontpage')}}/assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="{{ asset('frontpage')}}/assets/js/contact.js"></script>
<script src="{{ asset('frontpage')}}/assets/js/jquery.form.js"></script>
<script src="{{ asset('frontpage')}}/assets/js/jquery.validate.min.js"></script>
<script src="{{ asset('frontpage')}}/assets/js/mail-script.js"></script>
<script src="{{ asset('frontpage')}}/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{ asset('frontpage')}}/assets/js/plugins.js"></script>
<script src="{{ asset('frontpage')}}/assets/js/main.js"></script>

</body>
</html>