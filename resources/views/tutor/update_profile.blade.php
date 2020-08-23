@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">

        <h1>Update Profile</h1>

        <div class="container">
        
            <form action="">
            
                <div class="card col-md-10">
                    <div class="card-body">

                    <div  style="background-image: url({{asset('/material/img/faces/avatar.jpg')}});
                      background-size: cover;
                    "  id="image-preview">
                      <label  for="image-upload" id="image-label">Choose File</label>
                      <input type="file" name="image" id="image-upload" />
                    </div>

                   

                    <div class="form-group col-md-6">
                            <textarea placeholder="Tell us about yourself" name="bio" id="" row="3" class="form-control"></textarea>
                            
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Home Address">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>

                        

                        <div class="form-group">
                            <select class="form-control" name="" id="">
                                <option value="">--select state of residence--</option>
                                <option value="">FCT Abuja</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="" id="">
                                <option value="">--select expertise--</option>
                                <option value="">Information Technology</option>
                            </select>
                        </div>

                        <div class="container text-center">
                        
                        <div class="form-group">

                            <button class="btn btn-primary ">Submit</button>

                            </div>
                        </div>


                    </div>
                </div>

            </form>
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