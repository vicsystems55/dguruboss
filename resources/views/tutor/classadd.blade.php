@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')

  <div class="content cus bg-white" style="background-image: url('{{ asset('material') }}/img/1021.png'); background-size: contain; background-repeat: no-repeat; background-position: top right; align-items: center;">
    <div class="container-fluid">

            <div class="row">
            
            <div class="col-md-10">
            <div class="car col-md-9">
                <div class="card-bod">
                    <form action="">
                    
                        <div class="ro">

                            <div class="col-md-9 p-1 mx-auto">
                                <div class="form-group">
                                <h5 for="">Class Title</h5>
                                    <input class="form-control" type="text" placeholder="Enter Course Title" name="course_title">
                                </div>

                                <div class="form-group">
                                    <h5 for="">Class Description</h5>
                                    <textarea placeholder="Course Description" name="form-control" class="form-control" id="course_description" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                <h5 for="">Pick a Category</h5>
                                <select class="form-control">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                </div>
                            </div>

                            <div class="col-md-9 mx-auto">

                            <div class="row">
                                <div class="col">
                                <div class="form-group">
                                <h5 for="">Fee</h5>
                                    <input data-prefix="NGN" class="form-control-sm col-3" type="number" value="500" min="500" max="5000" step="500"/>
                            </div>
                                </div>

                                <div class="col">
                                <div class="form-group">
                                <h5 for="">Duration</h5>
                                    <input data-suffix="  Weeks &nbsp" class="form-control-sm col-3" type="number" value="2" min="2" max="40" step="1"/>
                            </div>
                                </div>
                            </div>
                            

                            

                                

                                <div class="form-group">
                                    <input class="" type="file"  name="banner">
                                </div>

                                


                            </div>

                        </div>

                       <div class="container ">
                       <div class="form-group text-center">
                                    <button class="col-4 btn-lg mx-auto btn btn-primary shadow ">Submit</button>
                        </div>
                       </div>
                    </form>
                </div>
            </div>
            </div>

            <div class="col-md-2">
            sdf
                <img src="" alt="">
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