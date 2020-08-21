@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div style="min-height: 600px;" class="conten">
  <div style="height: 30px;" class="d mt-2 p-2"></div>
      <div style="min-height: 320px; position: relative;" class="container-flui mt-5 bg-dark text-white p-2">
        <div

          style="
            top: 0;
            left: 0;
            position: absolute;
            width: 100%;
            min-height: 100%;
            background-color: black;
            z-index: 0;
            opacity: 45%;
          "
          >
        
        </div>
          <div  class="col-md-12 on">

              <div class="container">
                  <div class="row">
                      <div class="col-md-3">
                          <div class="mt-4 card-avatar">
                            <a href="#pablo">
                              <img class="img rounded-circle m" src="http://i.pravatar.cc/200">
                            </a>
                          </div>
                      </div>

                      <div class="col-md-7">
                        <h1 class="mt-5">Hello, {{Auth::user()->name}}</h1>
                          <h4>Bio:</h4>
                          <p class="col-md-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Accusamus, mollitia quae aspernatur voluptatem recusandae nesciunt
                          
                          </p>
                      </div>

                      <div class="col-md-1">
                      
                      
                      </div>
                  </div>

              </div>
          
          
          </div>

      </div>

        <div style="position: absolute; margin-top: -6em;" class="container">
          <div class="container">

          <div class="row">
          
          <div class="col-md-7 card bg-white">

                <div class="card-body text-dark">
                    <h4>user information</h4>

                    <div class="form-group">
                      <input type="text" class="form-control" value="{{Auth::user()->name}}">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" value="{{Auth::user()->email}}">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" value="" placeholder="">
                    </div><div class="form-group">
                      <input type="text" class="form-control" value="">
                    </div>

          </div>

    </div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h3>us</h3>
              </div>
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