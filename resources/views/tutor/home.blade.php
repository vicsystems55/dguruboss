@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">

    <h3>Welcome, {{Auth::user()->name}}</h3>
      <div class="row">
        
        <div class="col-lg-3 col-md-6 col-sm-6 mx-auto">
          <div class="card card-stats ">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Guruboss Credit</p>
              <h3 class="card-title">0.00GB</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mx-auto">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Classes Created</p>
              <h3 class="card-title">{{$tutor_regcourse->count()}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> Tracked from Github
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mx-auto">
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

       
        
      
        @endif

        @if($class == 'not-updated')

        <div class="container text-center p-2">
        <h1 class="lead text-center">No Classes Created Yet.</h1>
        <a href="tutor/addclasses" class="btn btn-primary">Create Class</a>
        </div>

        @else

        <h3>Recently Created Classes</h3>
        <hr>

        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">ALL COURSES</h4>
            <a class="btn btn-sm btn-secondary" class="float-right" href="">Create New</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    SN
                  </th>
                  <th>
                    Course Title
                  </th>
                  <th>
                    Status
                  </th>
                  <th>
                    Date Created
                  </th>
                  <th>
                    Fee
                  </th>
                  <th>
                    Edit
                  </th>
                </thead>
                <tbody>

                          @foreach($tutor_regcourse as $course)
                          <tr>
                            <td>
                              {{$loop->iteration}}
                            </td>
                            <td>
                              {{$course->title}}
                            </td>
                            <td class="">
                              <span class="badge badge-success">{{$course->status}}</span>
                            </td>
                            <td>
                              {{$course->created_at->diffForHumans()}}
                            </td>
                            <td class="text-primary">
                              <span class="text-info font-weight-bold">NGN {{$course->fee}}.00</span>
                            </td>
                            <td class="text-primary">
                              <a class="btn btn-secondary btn-sm" href="">Details</a>
                            </td>
                          </tr>

                          @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row">

        
              @foreach($tutor_regcourse as $course)

                  

                        

                   


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