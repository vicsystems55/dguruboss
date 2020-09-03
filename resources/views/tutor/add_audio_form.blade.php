<div class="text-center o">
<button class="btn btn-round btn-primary" data-toggle="modal" data-target="#audio">
    Add New Topic<i class="material-icons">assignment</i>

</button>
</div>

<div class="modal fade" id="audio" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="car  ">
                <div class="modal-heade">
                  <div class="card-header card-header-primary text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="material-icons">clear</i>
                    </button>

                    <h4 class="card-title">Add a new topic</h4>
                    
                  </div>
                </div>
                <div class="modal-body">
                    <form class="form" method="post" action="{{ route('tutor.create_topic')}}">
                        @csrf
                        <input type="hidden" name="couse_id" value="2">
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
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary  btn-lg">create</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>