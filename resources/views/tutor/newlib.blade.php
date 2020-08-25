@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div style="min-height: 600px;" class="content">
    <div style="height: 30px;" class="d mt-2 p-2"></div>
       

      
          <!-- just in section -->
          <div class="container">
            <h1>Just In</h1>
            <hr>
              <!-- just in courses -->
              <div class="row">

                  <div class="col-md-3 d-flex justify-content-center">
                        <!-- course card -->
                        <div class="card card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img" src="https://images.unsplash.com/photo-1511439817358-bee8e21790b5?auto=format&fit=crop&w=750&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" rel="nofollow">
                                    <div class="card-title">
                                        This Summer Will be Awesome
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">Fashion</h6>
                                <p class="card-description">
                                    Don&apos;t be scared of the truth because we need to restart the human foundation in truth And I love you </p>
                            </div>
                        </div>
                        <!-- end of course card -->




                  </div>

                  <div class="col-md-3">
                    highlight_file
                  </div>

                  <div class="col-md-3">
                    highlight_file
                  </div>

                  <div class="col-md-3">
                    highlight_file
                  </div>
              
              </div>

              <!-- end of just in courses -->
          
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