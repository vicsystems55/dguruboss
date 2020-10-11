<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Guruboss</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('edu')}}/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{asset('edu')}}/css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{asset('edu')}}/css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{asset('edu')}}/css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('edu')}}/css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('edu')}}/css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{asset('edu')}}/css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('edu')}}/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('edu')}}/css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{asset('edu')}}/css/responsive.css">

    <link href="{{ asset('img-upload') }}/css/bootstrap-imageupload.css" rel="stylesheet" />
  
  
</head>


@include('edu.header')




    @yield('content')



    <!--====== FOOTER PART START ======-->
    
    @include('edu.footer')
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    

    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="{{('edu')}}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{('edu')}}/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{('edu')}}/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="{{('edu')}}/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{('edu')}}/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="{{('edu')}}/js/waypoints.min.js"></script>
    <script src="{{('edu')}}/js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="{{('edu')}}/js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="{{('edu')}}/js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="{{('edu')}}/js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="{{('edu')}}/js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{('edu')}}/js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="{{('edu')}}/js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="{{('edu')}}/js/map-script.js"></script>

    <script src="{{ asset('img-upload') }}/js/bootstrap-imageupload.js"></script>
    <script src="{{ asset('upload-preview') }}/js/uploadPreview.min.js"></script>

    <script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();

            $('.img-upload').imgupload({
            allowedFormats: [ "jpg", "jpeg", "png", "gif", "mp4" ],
            previewWidth: 250,
            previewHeight: 250,
            maxFileSizeKb: 2048
            });

            $('#imageupload-disable').on('click', function() {
                $imageupload.imageupload('disable');
                $(this).blur();
            })

            $('#imageupload-enable').on('click', function() {
                $imageupload.imageupload('enable');
                $(this).blur();
            })

            $('#imageupload-reset').on('click', function() {
                $imageupload.imageupload('reset');
                $(this).blur();
            });
        </script>

</body>
</html>
