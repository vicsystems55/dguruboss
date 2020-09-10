@extends('frontpage.app')

@section('content')
<!-- Header End -->
<main>

            <div class="container p-5">

               <h1>Course Title</h1>

               <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis suscipit, nobis consequuntur vitae eos totam. Ea, et pariatur. Dolorem, dolor numquam qui velit cumque sunt officiis pariatur expedita at doloribus?
               </p>

               <a target="_blank" class="btn btn-primary" href="/course_session">Enroll</a>

            </div>

            <!-- header -->

               <div class="container">
               
                           <div class="row">
                                 <div class="col-md-9">
                                 
                                    <div class="container p-3">
            
                  
                                       <ul class="bg-dark nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                                          <li class="nav-item " role="presentation">
                                             <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Overview</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                             <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Curriculum</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                             <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Instructor</a>
                                          </li>
                                       </ul>
                                          <div class="tab-content" id="pills-tabContent">
                                             <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                             @include('frontpage.course.overview')
                                             </div>
                                             <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                             
                                             </div>
                                             <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                          
                                          
                                             </div>
                                          </div>


                                    </div>
                                 
                                 </div>

                                 <div class="col-md-3">

                                          <ul>
                                                <li>on</li>

                                          </ul>
                                 
                                 
                                 </div>
                           
                           </div>
               
               </div>
              
            


               <!-- tabs -->



                  

               <!-- tabls -->


            <!--? Blog Area Start -->
        
<!-- Blog Area End -->
</main>

@endsection
