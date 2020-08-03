<template>
    
<div class="o float-right">
    
        <button class="btn btn-round btn-info" data-toggle="modal" data-target="#signupModal">
    <i class="fa fa-plus" aria-hidden="true"></i>
    Create
</button>

<div class="modal fade" id="signupModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-signup modal-lg" role="document">
    <div class="modal-content">
      <div class="card card-signup card-plain">
        <div class="modal-header">
          <h5 class="modal-title card-title">Create a Course</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <form class="form" method="post" action="/add_course" enctype="multipart/form-data">
          <input type="hidden" name="_token" :value="csrf">
          <div class="row">
            <div class="col-md-6 ml-auto">
              
                
              
                <div class="card-body">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-book" aria-hidden="true"></i>
                          </div>
                      </div>
                        <input name="title" type="text" class="form-control" placeholder="Course Title">
                    </div>
                    
                  </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                    </div>
                      <textarea name="description" placeholder="Description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                    </div>
                      <select name="category" placeholder="Select " class="form-control" id="exampleFormControlSelect1">
                                    <option value="">--Select Category--</option>
                                    <option value="Business">Business</option>
                                    <option value="Finance and Accounting">Finance and Accounting</option>
                                    <option value="IT and Software">IT and Software</option>
                                    <option value="Personal Development">Personal Development</option>
                                    <option value="Design and Graphics">Design and Graphics</option>
                                    <option value="Marketting">Marketting</option>
                                    <option value="Health and Fitness">Health and Fitness</option>
                                    <option value="Music">Music</option>
                                    <option value="Teaching and Academics">Teaching and Academics</option>
                                    <option value="Others">Others</option>
                        </select>
                  </div>
                </div>

                

                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-book" aria-hidden="true"></i>
                          </div>
                      </div>
                        <div class="mx-3 container">
                          <div class="row">
                            <div class="col-6 mt-2 font-weight-bold">
                             <h6 class="float-right"> NGN</h6>
                            </div>
                            <div class="col-6">
                              <input name="fee" type="number" class="form-control" placeholder="Course Fee" min="1000" max="5000" step="500">
                            </div>
                            
                        </div>
                        </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-book" aria-hidden="true"></i>
                          </div>
                      </div>
                        <div class="mx-3 container">
                          <div class="row">
                            <div class="col-6">
                              <input name="duration" type="number" class="form-control" placeholder="Number of Weeks" min="1" max="50" step="1">
                            </div>
                            <div class="col-6 mt-2">
                              Week(s)
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>
                
                </div>
 
            </div>

            <div class="col-md-6 mr-auto">

                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail img-raised">
                        <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" rel="nofollow" alt="...">
                    </div>
                    <div style="width: 150px; height: 150px;" class="fileinput-preview fileinput-exists img-thumbnail img-raised"></div>
                    <div>
                        <span class="btn btn-raised btn-round btn-default btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="..." />
                        </span>
                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                </div>

            </div>

          </div>
           <div class="container">

                  <div class="modal-foote">
                  <button class="btn btn-primary float-right">Add Course</button>
                  </div>
                </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</div>


</template>

<script>
    export default {

        data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
},
      
        mounted() {
            console.log('Component mounted.')
        }

    }
</script>
