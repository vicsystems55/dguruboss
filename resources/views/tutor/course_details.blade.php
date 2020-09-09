@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
  <nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
    
      <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="javascript:;">All Classes</a></li>
      <li class="breadcrumb-item active" aria-current="page">Class Details</li>
    </ol>
  </nav>
    <div class="container-fluid">

           <div class="card">
            <div class="card-body">
            <h2>{{ $course_details->title}}</h2>

            

            <p class="col-md-6 p-2">
            {{ $course_details->description}}
            </p>
            </div>

           </div>


                <div class="row">
                  <div class="col-md-7">
                        
                          <div class="card">
                            <div class="card-body">
                              <h3>Topics</h3>
                              <div id="accordion" role="tablist">


                                @foreach($topics as $topic)

                                <div class="card card-collapse">
                                  <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">
                                      <!-- <a data-toggle="collapse" href="#{{$loop->iteration}}" aria-expanded="true" aria-controls="{{$loop->iteration}}"> -->
                                      <div class="i font-weight-bold">{{$loop->iteration}}. {{$topic->title}}</div>
                                        <!-- <i class="material-icons">keyboard_arrow_down</i> -->
                                      </a>
                                      <a target="_blank" class="float-right" href="{{ route('tutor.edit_topic', [$topic->id,$course_details->id])}}">Edit</a>
                                    </h5>
                                  </div>

                                  <div id="{{$loop->iteration}}" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <!-- <div class="card-body">
                                    
                                     @include('tutor.add_doc_form')
                                    </div> -->
                                  </div>
                                </div>

                                @endforeach

                                  
                                </div>
                              </div>
                        
                        </div>
                        @include('tutor.add_audio_form')

                    






                  </div>

                  <div class="col-md-4">

                    <div class="card">
                      <div class="card-body">
                        <h4>Settings</h4>

                        <form action="">
                          <input type="hidden" name="{{$course_details->id}}">
                          <input type="hidden" name="">
                          <button class="btn btn-primary btn-sm float-left">Publish</button>
                        </form>
                        <form action="">
                          <input type="hidden" name="{{$course_details->id}}">
                          <input type="hidden" name="">
                          <button class="btn btn-primary btn-sm float-right">Save to Draft</button>
                        </form>
                       
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