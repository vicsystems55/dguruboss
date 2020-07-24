@extends('layouts.student', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
        <h1>Vue Sample</h1>
        <hr>

        <div id="ap">

               <example-component></example-component> 

               <another-component></another-component>  

               <addcourse-component></addcourse-component>  

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