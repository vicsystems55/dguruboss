@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')

  <div class="content cus bg-white" style="background-image: url('{{ asset('material') }}/img/1021.png'); background-size: contain; background-repeat: no-repeat; background-position: top right; align-items: center;">
    <div class="container-fluid">

            <div class="row">
            
            <div class="col-md-10">
            <div class="car col-md-9">
                <div class="card-bod">
                <h3 class="display-4 font-weight-bold">Class Setup</h3>
                    <form method="post" action="{{ route('tutor.create-class')}}">
                    @csrf
                        <div class="ro">

                            <div class="col-md-9 p-1 mx-auto">
                                <div class="form-group  @error('course_title') has-danger @enderror">
                                <h5 for="">Class Title</h5>
                                    <input class="form-control  " type="text" placeholder="Enter Course Title" name="course_title">
                                    @if ($errors->has('course_title'))
                                        <div id="course_title-error" class="error text-danger pl-3" for="course_title" style="display: block;">
                                        <strong>{{ $errors->first('course_title') }}</strong>
                                        </div>
                                    @endif
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

                                <div class="container">

                                    <!-- bootstrap-imageupload. -->
                                    <div class="card card-body imageupload panel panel-default">
                                        <div class="panel-heading clearfix">
                                            <h5 class="panel-title pull-left">Upload Banner</h5>
                                            <div class="btn-group pull-right">
                                                <button type="button" class="btn btn-sm btn-secondary active">File</button>
                                                <button type="button" class="btn btn-sm btn-secondary">URL</button>
                                            </div>
                                        </div>
                                        <div class="file-tab panel-body">
                                            <label class="btn btn-sm btn-prmary btn-file">
                                                <span>Choose Banner</span>
                                                <!-- The file is stored here. -->
                                                <input type="file" name="image-file">
                                            </label>
                                            <button type="button" class="btn btn-sm btn-default">Remove</button>
                                        </div>
                                        <div class="url-tab panel-body">
                                            <div class="input-group">
                                                <input type="text" class="form-control hasclear" placeholder="Image URL">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-sm btn-default">Upload</button>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-default">Remove</button>
                                            <!-- The URL is stored here. -->
                                            <input type="hidden" name="image-url">
                                            <br>
                                            <button type="button" id="imageupload-reset" class="btn btn-default btn-sm">Reset..</button>
                                        </div>
                                    </div>

                                    <!-- bootstrap-imageupload method buttons. -->
                                    
                                    

                                </div>



                            </div>

                            <div class="col-md-9 mx-auto">

                            <div class="row">
                                <div class="col">
                                <div class="form-group">
                                <h5 for="">Fee</h5>
                                    <input data-prefix="&nbsp NGN &nbsp" class="form-control-sm col-3" type="number" value="500" min="500" max="5000" step="500"/>
                            </div>
                                </div>

                                <div class="col">
                                <div class="form-group">
                                <h5 for="">Duration</h5>
                                    <input data-suffix="&nbsp  Weeks &nbsp" class="form-control-sm col-3" type="number" value="2" min="2" max="40" step="1"/>
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