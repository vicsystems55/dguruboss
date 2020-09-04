@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="car">
            <div class="card-bod">
            <nav aria-label="breadcrumb " role="navigation">
                <ol class="breadcrumb">
                
                    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">All Classes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Class Details</li>
                </ol>
                </nav>
            </div>
        </div>
    <div class="l text-center">
                <a class="btn btn-primary btn-sm" href="{{ route('tutor.class-enrich', $course_id)}}">Back To Parent Course</a>
            </div>
    <div class="card">
        <div class="card-body">
            
            <h3>
                <input type="text" class="form-control-lg col-md-5 form-control" value="jj">
            </h3>
            

        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
                <div class="card">
                    <div class="card-body">

                    <textarea>
                        Welcome to TinyMCE!
                    </textarea>
                    <script>
                        tinymce.init({
                        selector: 'textarea',
                        plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
                        toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
                        toolbar_mode: 'floating',
                        tinycomments_mode: 'embedded',
                        tinycomments_author: 'Author name',
                        });
                    </script>
                        
                    </div>
                </div>
        </div>

        <div class="col-md-5">
                <div class="card">
                    <div class="card-body">

                    <a class="btn btn-primary btn-sm" href="">Publish</a>
                    <a class="btn btn-primary btn-sm" href="">Save to Draft</a>
                        
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