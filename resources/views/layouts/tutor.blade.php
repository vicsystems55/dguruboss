<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GuruBoss</title>
    
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet" />
    <link href="{{ asset('material') }}/demo/custom.css" rel="stylesheet" />

    <link href="{{ asset('img-upload') }}/css/bootstrap-imageupload.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" integrity="sha512-kb1CHTNhoLzinkElTgWn246D6pX22xj8jFNKsDmVwIQo+px7n1yjJUZraVuR/ou6Kmgea4vZXZeUDbqKtXkEMg==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.tiny.cloud/1/f6kzm0d5bzj37za3q6fowc1je27bbcopwhc0wqakz3x5l8xa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    </head>
    <body class="{{ $class ?? '' }}">
        <div id="app">
        
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <div class="wrapper ">
            @include('layouts.navbars.tutorsidebar')
            <div class="main-panel">
                @include('layouts.navbars.navs.auth')
                @yield('content')
                @include('layouts.footers.auth')
            </div>
            </div>
        @endauth
        @guest()
            @include('layouts.page_templates.guest')
        @endguest
        
        
        
        </div>
        
        <!--   Core JS Files   -->
        <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
        
       
        <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
        <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Plugin for the momentJs  -->
        <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
        <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dinamically elements -->
        <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script>
        <!-- Chartist JS -->
        <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('material') }}/demo/demo.js"></script>
        <script src="{{ asset('material') }}/js/settings.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
        <script src="{{ asset('input-spinner') }}/bootstrap-input-spinner.js"></script>
        <script src="{{ asset('img-upload') }}/js/bootstrap-imageupload.js"></script>
        <script src="{{ asset('upload-preview') }}/js/uploadPreview.min.js"></script>

        
        
    

        
        
        

        
<script>
    $("input[type='number']").inputSpinner()
</script>
<script>
    var $inputChangeClass = $("#inputChangeClass")
    var $classInput = $("#classInput")
    $classInput.on("input", function () {
        $inputChangeClass.prop("class", this.value)
    })
</script>
<script>
    var $inputDisabled = $("#inputDisabled")
    var $disabledSwitch = $("#disabledSwitch")
    $disabledSwitch.on("change", function () {
        $inputDisabled.prop("disabled", $(this).prop("checked"))
    })
</script>
<!--suppress JSUnusedLocalSymbols -->
<script>
    var $changedInput = $("#changedInput")
    var $valueOnInput = $("#valueOnInput")
    var $valueOnChange = $("#valueOnChange")
    $changedInput.on("input", function (event) {
        $valueOnInput.html($changedInput.val())
    })
    $changedInput.on("change", function (event) {
        $valueOnChange.html($changedInput.val())
    })
</script>
<!--suppress JSUnusedLocalSymbols -->
<script>
    var $minInput = $("#minInput")
    var $maxInput = $("#maxInput")
    var $stepInput = $("#stepInput")
    var $dataDecimalsInput = $("#dataDecimalsInput")
    var $minMaxTester = $("#minMaxTester")
    $minInput.on("change", function (event) {
        $minMaxTester.attr("min", $minInput.val())
    })
    $maxInput.on("change", function (event) {
        $minMaxTester.attr("max", $maxInput.val())
    })
    $stepInput.on("change", function (event) {
        $minMaxTester.attr("step", $stepInput.val())
    })
    $dataDecimalsInput.on("change", function (event) {
        $minMaxTester.attr("data-decimals", $dataDecimalsInput.val())
    })
</script>
<!--suppress JSUnusedLocalSymbols -->
<script>
    var $inputNet = $("#inputNet")
    var $inputGross = $("#inputGross")
    $inputNet.on("change", function (event) {
        $inputGross.val($inputNet.val() * 1.19)
    })
    $inputGross.on("change", function (event) {
        $inputNet.val($inputGross.val() / 1.19)
    })
    $inputGross.val($inputNet.val() * 1.19)
</script>
<script>
    var $inputLoop = $("#inputLoop")
    $inputLoop.on("change", function (event) {
        var value = $inputLoop.val()
        value = (value < 0) ? 360 + parseInt(value, 10) : value % 360
        $inputLoop.val(value)
    })
</script>
<script>
    var $buttonDestroy = $("#buttonDestroy")
    var $buttonCreate = $("#buttonCreate")
    var $inputDestroyCreate = $("#inputDestroyCreate")
    $buttonDestroy.click(function () {
        $inputDestroyCreate.inputSpinner("destroy")
        $buttonDestroy.attr("disabled", true)
        $buttonCreate.attr("disabled", false)
    })
    $buttonCreate.click(function () {
        $inputDestroyCreate.inputSpinner()
        $buttonDestroy.attr("disabled", false)
        $buttonCreate.attr("disabled", true)
    })
</script>

<script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();

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

        <script type="text/javascript">
        $(document).ready(function() {
        $.uploadPreview({
            input_field: "#image-upload",   // Default: .image-upload
            preview_box: "#image-preview",  // Default: .image-preview
            label_field: "#image-label",    // Default: .image-label
            label_default: "Choose File",   // Default: Choose File
            label_selected: "Change File",  // Default: Change File
            no_label: false,                // Default: false
            success_callback: null          // Default: null
        });
        });
        </script>

<script>
	$("select").bsMultiSelect({cssPatch : {
                   choices: {columnCount:'3' },
                }});
</script>

<script type="text/javascript">
    $(function(){
        $('#people').multiSelect();
        $('#ice-cream').multiSelect();
        $('#line-wrap-example').multiSelect({
            positionMenuWithin: $('.position-menu-within')
        });
        $('#categories').multiSelect({
            noneText: 'All categories',
            presets: [
                {
                    name: 'All categories',
                    options: []
                },
                {
                    name: 'My categories',
                    options: ['a', 'c']
                }
            ]
        });
        $('#modal-example').multiSelect({
            'modalHTML': '<div class="multi-select-modal">'
        });
    });
    </script>

 
        
        @stack('js')
    </body>
</html>