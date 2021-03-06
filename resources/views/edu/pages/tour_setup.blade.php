@extends('edu.base', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('GuruBoss')])

@section('content')
<section id="count-down-part" class="bg_cover pt-70 pb-120" data-overlay="8" style="background-image: url(/edu/images/bg-2.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                
                <div class="col-lg-8 category-for category-form-3">



                <div class="contact-from mt-30">
                       <div class="section-title">
                           <h5>Enter Tournament</h5>
                           <h2>Upload Video</h2>
                       </div> <!-- section title -->

                       
                        <div class="main-form">

                        <form  action="{{ url('video') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="user_id" value ="{{Auth::user()->id}}"  />

                                <div class="singel-form form-group">
                                <input type="text" name="title" placeholder="Enter Video Title" />
                                </div>

                                <div class="singel-form form-group">
                                <input name="description" placeholder="Video description">
                            
                                </div>

                                <div class="singel-form form-group">
                                <input type="file" name="video" />
                                </div>

                                <div class="singel-form form-group">
                                <button type="submit" class="main-btn">Submit</button>
                                </div>
                                {{ csrf_field() }}
                         </form>

                        </div>
                       
                       <div class="main-form pt-4">

                           

                           <!-- <video width="320" height="240" controls>
                                        <source src="movie.mp4" type="video/mp4">
                                        <source src="movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                        </video> -->
                       </div> <!-- main form -->
                   </div>





                    <!-- <div class="category-form category-form-3 pt-50">
                        <div class="form-title text-center">
                            <h3>Login</h3>
                        
                        </div>
                        <div class="main-form">
                            <form action="#">
                                <div class="singel-form">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="singel-form">
                                    <input type="password" placeholder="Password">
                                </div>
                                
                                <div class="singel-form">
                                    <button class="main-btn shadow" type="button">Login</button>
                                </div>
                            </form>
                        </div>

                    </div> -->
                    
                     <!-- category form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
@endsection
