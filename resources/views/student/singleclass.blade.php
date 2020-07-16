@extends('layouts.student', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
        <h1>Course One</h1>

        
        <div class="container">
            
            <div class="row">

                <div class="col-md-8 p-2">
                    <div class="card" style="width: auto;">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80" rel="nofollow" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Daily Sales</h4>
                            <p class="card-category">
                            <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                        </div>
                        <div class="card-footer">
                        <div class="card-footer ">
                                    <div class="author">
                                        <a href="#pablo">
                                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=334&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" rel="nofollow" alt="..." class="avatar img-raised">
                                        <span>Lord Alex</span>
                                        &#xB7;
                                        </a>
                                    </div>
                                    <div class="stats ml-auto">
                                            <i class="material-icons">thumb_up</i> 342 &#xB7; &#xB7;
                                            <i class="material-icons">thumb_down</i> 342 &#xB7; &#xB7;
                                            <i class="material-icons">chat_bubble</i> 45
                                    </div>
                                </div>
                            <div class="stats">
                                <i class="material-icons">access_time</i> updated 4 minutes ago
                            </div>
                        </div>

                        <p class="container">
                            <a class="btn btn-primary text-center" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                View more
                            </a>
                            
                            </p>
                            <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                            </div>
                            </div>
                    </div>

                    <div class="card">
                        <div class="card-body ">
                                <h6 class="card-category text-danger">
                                    <i class="material-icons">trending_up</i> Trending
                                </h6>
                                <h4 class="card-title">
                                    <a href="#pablo">To Grow Your Business Start Focusing on Your Employees</a>
                                </h4>

                            </div>
                                <div class="card-footer ">
                                    <div class="author">
                                        <a href="#pablo">
                                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=334&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" rel="nofollow" alt="..." class="avatar img-raised">
                                        <span>Lord Alex</span>
                                        </a>
                                    </div>
                                    <div class="stats ml-auto">
                                            <i class="material-icons">favorite</i> 342 &#xB7;
                                            <i class="material-icons">chat_bubble</i> 45
                                    </div>
                                </div>
                            </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="card-stats">
                                <div class="author">
                                    <a href="#pablo">
                                    <span class=" avatar img-raised shadow"><i class="material-icons">play_circle_outline</i></span>
                                    <span>01. Introduction</span>
                                    </a>
                                </div>
                            <div class="stats ml-auto">
                                    1:30
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="card">
                        <div class="card-body">
                            
                            <div class="card-stats">
                                <div class="author">
                                    <a href="#pablo">
                                    <span class=" avatar img-raised shadow"><i class="material-icons">lock</i></span>
                                    <span>02. Graphics Concepts</span>
                                    </a>
                                </div>
                            <div class="stats ml-auto">
                                    3:30
                                </div>
                            </div>
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