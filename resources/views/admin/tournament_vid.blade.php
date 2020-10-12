@extends('layouts.admin', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">

       
        <h3>Tour Videos</h3>

        <div class="row">
        
                <div class="col-md-3">
                
                <div class="card" style="width: 20rem;">

                <iframe max-width="420" max-height="315"
                src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0">
                </iframe>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
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