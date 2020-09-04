@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')

  <div class="content cus" >
    <div class="container-flui">

    <nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
    
      <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="javascript:;">All Classes</a></li>
      <li class="breadcrumb-item active" aria-current="page">Class Details</li>
    </ol>
  </nav>

            <div class="row">
            
            <div class="col-md-10 mx-auto">
            <div class="card ">
                <div class="card-body">
                <h3 class="text-center">Class Setup</h3>
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

                                <div class="form-group @error('course_description') has-danger @enderror">
                                    <h5 for="">Class Description</h5>
                                    <textarea placeholder="Course Description" name="course_description" class="form-control" id="course_description" rows="3"></textarea>
                                    @if ($errors->has('course_description'))
                                        <div id="course_description-error" class="error text-danger pl-3" for="course_description" style="display: block;">
                                        <strong>{{ $errors->first('course_description') }}</strong>
                                        </div>
                                    @endif
                                </div>

                                



                                <div class="form-group">
                                    <h5 for="">Pick a Category</h5>

                                    <div class="row">
                                        @foreach($class_category as $category)
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="{{$category->category_name}}">
                                                            {{$category->category_name}}
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                        @endforeach

                                    </div>

                                    @foreach($class_category as $category)
                                    

                                    @endforeach

                                </div>

                                <!-- <div class="form-check mr-auto ml-3 mt-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="featured_course" > {{ __('Featured Course?') }}
                                        <span class="form-check-sign">
                                        <span class="check"></span>
                                        </span>
                                    </label>
                                    </div> -->

                                    <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 for="">Fee</h5>
                                        <input name="course_fee" data-prefix="&nbsp NGN &nbsp" class="form-control-sm col-3" type="number" value="500" min="500" max="5000" step="500"/>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <h5 for="">Duration</h5>
                                        <input name="duration_value" class="form-control-sm col-3" type="number" value="2" min="2" max="40" step="1"/>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                    <h5 for="">.</h5>
                                        <select class="form-control" name="duration_type" id="">
                                            <option value="hours">select duration</option>
                                            <option value="hours">Hours</option>
                                            <option value="days">Days</option>
                                            <option value="weeks">Weeks</option>
                                        </select>
                                    </div>
                                
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