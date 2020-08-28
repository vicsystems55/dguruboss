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

                <a href="/publish" class="btn btn-primary float-right">PUBLISH</a>

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
            @include('tutor.add_material_form')
            </div>

            <div class="tab-pane" id="audio">
            @include('tutor.add_audio_form')
            </div>

            <div class="tab-pane" id="documents">
            @include('tutor.add_doc_form')
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