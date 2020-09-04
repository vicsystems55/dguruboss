<div class="text-center o">
<button class="btn btn-round btn-primary btn-sm" data-toggle="modal" data-target="#audio">
    Add New Topic<i class="material-icons">assignment</i>

</button>
</div>

<div class="modal fade" id="audio" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="car  ">
                <div class="modal-heade">
                  <div class="card- card-header-primary text-center">
                  
                      
                    

                    
                    
                  </div>
                </div>
                <div class="modal-body">
                <h4 class="card-title">Add a new topic</h4>
                    <form class="form" method="post" action="{{ route('tutor.create_topic')}}">
                        @csrf
                        <input type="hidden" name="course_id" value="{{$course_details->id}}">
                        <div class="card-bod">

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">assignment</i></div>
                                  </div>
                                  <input name="title" type="text" class="form-control" placeholder="Title">
                                </div>
                            </div>

                            

                            
                        </div>
                   
                </div>
                <div class="modal-foote text-center justify-content-center">
                    <button type="submit" class="btn btn-primary  btn-sm">create</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>