@extends('edu.base', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('GuruBoss')])

@section('content')
<section id="count-down-part" class="bg_cover pt-70 pb-120" data-overlay="8" style="background-image: url(/edu/images/bg-2.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                
                <div class="col-lg-8 category-for category-form-3">



                <div class="contact-from mt-30">
                       <div class="section-title">
                           
                           <h2>Upload Successfull</h2>
                       </div> <!-- section title -->

                       
                       <div class="main-form pt-4">

                            <img src="/alert/success.gif" alt="">

                          

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
