@extends('layouts.admin', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">

       
        <h2>Currently Running Tournament</h2>

        <div class="card card-nav-tabs text-center">
          <div class="card-header card-header-primary">
            Featured
          </div>
          <div class="card-body">
            <h4 class="card-title">Special title treatment</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#0" class="btn btn-primary">Go somewhere</a>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>

        <h2>All Tournament</h2>

        <div class="card card-nav-tabs text-center">
          <div class="card-header card-header-primary">
            Featured
          </div>
          <div class="card-body">
            <h4 class="card-title">Special title treatment</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#0" class="btn btn-primary">Go somewhere</a>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>

        <div class="card card-nav-tabs text-center">
        <div class="card-header card-header-primary">
          Featured
        </div>
        <div class="card-body">
          <h4 class="card-title">Special title treatment</h4>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#0" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
          2 days ago
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