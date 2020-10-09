@extends('edu.base', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('GuruBoss')])

@section('content')
<section id="count-down-part" class="bg_cover pt-70 pb-120" data-overlay="8" style="background-image: url(/edu/images/bg-2.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                
                <div class="col-lg-8 category-for category-form-3">



                <div class="contact-from mt-30">
                       <div class="section-title">
                           <h5>Signup Here</h5>
                           <h2>Create an account</h2>
                       </div> <!-- section title -->
                       <div class="main-form pt-4">
                           <form id="contact-form" action="#" method="post" data-toggle="validator">
                               <div class="row">
                                   <div class="col-md-6">
                                       <div class="singel-form form-group">
                                           <input name="name" type="text" placeholder="Your name" data-error="Name is required." required="required">
                                           <div class="help-block with-errors"></div>
                                       </div> <!-- singel form -->
                                   </div>
                                   <div class="col-md-6">
                                       <div class="singel-form form-group">
                                           <input name="email" type="email" placeholder="Email" data-error="Valid email is required." required="required">
                                           <div class="help-block with-errors"></div>
                                       </div> <!-- singel form -->
                                   </div>
                                   <div class="col-md-6">
                                       <div class="singel-form form-group">
                                           <input name="referral_code" type="text" placeholder="Referral code">
                                           <div class="help-block with-errors"></div>
                                       </div> <!-- singel form --> 
                                   </div>
                                   <div class="col-md-6">
                                       <div class="singel-form form-group">
                                           <input name="phone" type="text" placeholder="Phone" data-error="Phone is required." required="required">
                                           <div class="help-block with-errors">..</div>
                                       </div> <!-- singel form -->
                                   </div>


                                   <div class="col-md-6">
                                       <div class="singel-form form-group">
                                           <input name="password" type="text" placeholder="Password" data-error="password is required." required="required">
                                           <div class="help-block with-errors"></div>
                                       </div> <!-- singel form --> 
                                   </div>
                                   <div class="col-md-6">
                                       <div class="singel-form form-group">
                                           <input name="phone" type="password_confirmation" placeholder="Confirm Password" data-error="Phone is required." required="required">
                                           <div class="help-block with-errors">..</div>
                                       </div> <!-- singel form -->
                                   </div>


                                   <div class="col-md-12">
                                       <div class="singel-form form-group">
                                           
                                           <div class="help-block with-errors"></div>
                                       </div> <!-- singel form -->
                                   </div>
                                   <p class="form-message"></p>
                                   <div class="col-md-12">
                                       <div class="singel-form">
                                           <button type="submit" class="main-btn">Submit</button>
                                       </div> <!-- singel form -->
                                   </div> 
                               </div> <!-- row -->
                           </form>
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
