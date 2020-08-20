@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
    
        <h2>Step 1</h2>

            <div class="card">
                <div class="card-body">
                    <form action="">
                    
                        <div class="row">

                            <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Enter Course Title" name="course_title">
                            </div>

                            <div class="form-group">
                                
                                <textarea placeholder="Course Description" name="form-control" class="form-control" id="course_description" rows="3"></textarea>
                            </div>

                            
                                
                                <select class="form-control">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>



                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                                <h3 for="">Fee</h3>
                                    <input data-prefix="NGN" class="form-control-lg col-4" type="number" value="500" min="500" max="5000" step="500"/>
                                </div>

                                <h3 for="">Duration</h3>
                                    <input data-suffix="Weeks" class="form-control-lg col-4" type="number" value="2" min="2" max="40" step="1"/>
                                </div>

                                

                                <div class="form-group">
                                    <input class="" type="file"  name="banner">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary shadow float-right">Next</button>
                                </div>


                            </div>

                        </div>
                    </form>
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