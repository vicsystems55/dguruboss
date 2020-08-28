@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">

    <h3>Welcome, {{Auth::user()->name}}</h3>
      <div class="row">
        
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Revenue</p>
              <h3 class="card-title">$0</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Classes Created</p>
              <h3 class="card-title">0</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> Tracked from Github
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-twitter"></i>
              </div>
              <p class="card-category">Students</p>
              <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Just Updated
              </div>
            </div>
          </div>
        </div>
      </div>

        @if($profile == 'not-updated')

        <div class="container text-center">
        <h1 class="lead text-center">Proceed to Update Profile.</h1>
        <a href="/tutor/profile" class="btn btn-primary">Update Profile</a>
        </div>
      
        @endif

        @if($class == 'not-updated')

        <div class="container text-center">
        <h1 class="lead text-center">No Classes Created Yet.</h1>
        <a href="tutor/addclasses" class="btn btn-primary">Create Class</a>
        </div>

        @else
        <div class="row">
              @foreach($tutor_regcourse as $course)

                  

                        <div class="col-md-4">

                            <div class="card card-blog d-flex justify-content-center">
                              <div class="card-header card-header-image">
                                  <a href="{{ route('tutor.one_class',2)}}">
                                      <img class="img" src="https://images.unsplash.com/photo-1511439817358-bee8e21790b5?auto=format&fit=crop&w=750&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" rel="nofollow">
                                      <div class="card-title">
                                          This Summer Will be Awesome
                                      </div>
                                  </a>
                              </div>
                              <div class="card-body">
                                  <h6 class="card-category text-info">Fashion</h6>
                                  <p class="card-description">
                                      Don&apos;t be scared of the truth because we need to restart thenye I love Rick Owens&#x2019; bed design but the back is...
                                  </p>
                              </div>
                          </div>
                        
                        </div>

                   


              @endforeach

              </div>


        @endif
      
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