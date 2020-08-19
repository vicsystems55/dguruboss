@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
  <nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
   
    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">All Classes</a></li>
    <li class="breadcrumb-item active" aria-current="page">Class Details</li>
  </ol>
</nav>
    <div class="container-fluid">

            <h2>Introduction To Graphics Design</h2>

            <p class="col-md-6 p-2">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptates aliquam sequi, 
              temporibus, aperiam quos reprehenderit quae voluptatem odit, magni eaque. 
              Eveniet perspiciatis molestias cumque saepe reprehenderit 
              assumenda aspernatur ipsam.
            </p>

            <div class="card card-nav-tabs card-plain">
    <div class="card-header card-header-primary">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs justify-content-center" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#video" data-toggle="tab">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#audio" data-toggle="tab">audios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#documents" data-toggle="tab">Documents</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><div class="card-body ">
        <div class="tab-content col-md-6">
            <div class="tab-pane active" id="video">

            <div class="alert alert-default" role="alert">
              <div class="row">
                <div class="col-1">
                <span class="material-icons">
                play_circle_outline
                </span>
                  </div>

                  <div class="col">
                  This is a primary alert—check 
                  </div>

                  <div class="col font-italics">
                  32:12
                  </div>
              </div> 
            </div>

            <div class="alert alert-default" role="alert">
              <div class="row">
                <div class="col-1">
                <span class="material-icons">
                play_circle_outline
                </span>
                  </div>

                  <div class="col">
                  This is a primary alert—check 
                  </div>

                  <div class="col font-italics">
                  32:12
                  </div>
              </div> 
            </div>

                <!-- <h3 class="text-dark text-center">
                    No Records Founds!!
                </h3> -->
            </div>
            <div class="tab-pane" id="audio">
            <div class="alert alert-default" role="alert">
              <div class="row">
                <div class="col-1">
                <i class="far fa-file-audio fa-2x"></i>
                  </div>

                  <div class="col">
                  This is a primary alert—check 
                  </div>

                  <div class="col font-italics float-right">
                  32:12
                  </div>
              </div> 
            </div>

            <div class="alert alert-default" role="alert">
              <div class="row">
                <div class="col-1">
                <i class="far fa-file-audio fa-2x"></i>
                  </div>

                  <div class="col">
                  This is a primary alert—check 
                  </div>

                  <div class="col font-italics">
                  32:12
                  </div>
              </div> 
            </div>
           
            <h3 class="text-dark text-center">
                    No Records Founds!!
                </h3>
            </div>
            <div class="tab-pane" id="documents">

            <div class="alert alert-default" role="alert">
              <div class="row">
                <div class="col-1">
                <i class="far fa-file-alt fa-2x"></i>
               
                  </div>

                  <div class="col">
                  This is a primary alert—check 
                  </div>

                  <div class="col font-italics">
                  32:12
                  </div>
              </div> 
            </div>
            
            <h3 class="text-dark text-center">
                    No Records Founds!!
                </h3>
            </div>
        </div>
    </div>
  </div>

    
   
      
      
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush