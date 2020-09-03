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

            <h2>Introduction To Graphics Design</h2>

                <a href="/publish" class="btn btn-primary float-right">PUBLISH</a>

            <p class="col-md-6 p-2">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptates aliquam sequi, 
              temporibus, aperiam quos reprehenderit quae voluptatem odit, magni eaque. 
              Eveniet perspiciatis molestias cumque saepe reprehenderit 
              assumenda aspernatur ipsam.
            </p>


          <h3>Topics</h3>
            <div id="accordion" role="tablist">


              @foreach($topics as $topic)

              <div class="card card-collapse">
                <div class="card-header" role="tab" id="headingOne">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" href="#{{$loop->iteration}}" aria-expanded="true" aria-controls="{{$loop->iteration}}">
                    {{$loop->iteration}}. {{$topic->title}}
                      <i class="material-icons">keyboard_arrow_down</i>
                    </a>
                  </h5>
                </div>

                <div id="{{$loop->iteration}}" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                  <ul class="list-group">
                    NO lessons added
                  
                  </ul>
                  @include('tutor.add_doc_form')
                  </div>
                </div>
              </div>

              @endforeach

                
              </div>
            </div>

            

            @include('tutor.add_audio_form')

    
   
      
      
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