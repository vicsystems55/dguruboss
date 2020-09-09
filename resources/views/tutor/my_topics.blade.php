@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">

        <div class="row">
        
            <div class="col-md-8">
                <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">All Topics</h4>
                    <a class="btn btn-sm btn-secondary" class="float-right" href="">Create New Course</a>
                </div>
                    <div class="card-body">
                    <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    SN
                  </th>
                  <th>
                    Topic Title
                  </th>
                  <th>
                    Status
                  </th>
                  <th>
                    Date Created
                  </th>
                  <th>
                    Parent Course
                  </th>
                  <th>
                    Edit
                  </th>
                </thead>
                <tbody>

                          
                          <tr>
                            <td>
                              1
                            </td>
                            <td>
                              <span>How to make a kit</span>
                            </td>
                            <td class="">
                              <span class="badge badge-warning">pending</span>
                            </td>
                            <td>
                             <span class="badge badge-info"> pending</span>
                            </td>
                            <td class="font-weight-bold">
                              Creaive Minds
                            </td>
                            <td class="text-primary">
                              <a target="_blank" class="btn btn-dark btn-sm" href="">Details</a>
                            </td>
                          </tr>

                         
                  
                </tbody>
              </table>
            </div>
                    </div>
                

                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
            
                    <div class="card-body">
                    
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