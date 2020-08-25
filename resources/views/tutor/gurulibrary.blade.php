@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="conten">
        <div style="min-height: 700px;" class="container-flui">
          <!-- spacer -->
         <div class="p-5">
         
         </div>
         <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb">
            
            <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Classes</li>
          </ol>
        </nav>
         <!-- spacer -->
          <!-- start of hero -->
            <div class="overlay card-backgroun" style="background-image: url('https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=750&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D')">
            
                <div class="card-body text-white">
                <h1 class="animate__animated animate__backInDown">Welcome to Guruboss Library</h1>

                <p class="col-md-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ut repellat eligendi beatae reprehenderit ab amet! Est earum laboriosam distinctio, fugiat atque sapiente dignissimos ut consequuntur perspiciatis rem necessitatibus voluptatibus?</p>

                </div>
            </div>
            <!-- end of hero -->
     
               

            <div class="container">

            

                  <form class="card navbar-form col-md-7 p-3 mx-auto">
                    <span class="bmd-form-group"><div class="input-group no-border">
                      <input type="text" value="" class="form-control" placeholder="Search for resources...">
                      <button type="submit" class="btn btn-primary btn-round btn-just-icon">
                        <i class="material-icons">search</i>
                        <div class="ripple-container"></div>
                      </button>
                      </div>
                    </span>
                    <div class="conta float-right">
                    
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> Videos
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> Audios
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" > Documents
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                            </label>
                          </div>
                    </div>
                  </form>

                    

            <h1 >Just In</h1>
            <hr>

              <div class="row">
                <div class="col-md-3 d-flex justify-content-center">



                    <div class="card card-blog">
                          <div class="card-header card-header-image">
                              <a href="{{ route('tutor.one_class',2)}}">
                                  <img class="img" src="https://images.unsplash.com/photo-1511439817358-bee8e21790b5?auto=format&fit=crop&w=750&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" rel="nofollow">
                                  <div class="card-title">
                                      This Summer Will be Awesome
                                  </div>
                              </a>
                          </div>
                          <div class="card-body">
                              <h6 class="card-category text-info">Fashion</h6>
                              <p class="card-description">
                                  Don&apos;t be scared of the truth because we need to restart thenye I love Rick Owens&#x2019; bed design but the back is...
                              </p>
                          </div>
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